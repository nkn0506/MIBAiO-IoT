<?php
    include_once('esp-database.php');
    date_default_timezone_set('Asia/Kolkata');
    $result = getAllOutputs();
    $html_buttons = null;
    if ($result) {
        while ($row = $result->fetch_assoc()) {
            if ($row["state"] == "1"){
                $button_checked = "checked";
            }
            else {
                $button_checked = "";
            }
            $html_buttons .= '<div class ="wrap">Room ' . $row["board"] . '</div><div class="content"><h3>' . $row["name"] . ' - GPIO ' . $row["gpio"] . ' <i><a title="This will delete the selected output" onclick="deleteOutput(this)" href="javascript:void(0);" id="' . $row["id"] . '" style="margin-left:10%;">Delete  </a></i>
                <label class="switch" style="margin-left:10%;"><input type="checkbox" onchange="updateOutput(this)" id="' . $row["id"] . '" ' . $button_checked . '><span class="slider"></span></h3></label></div><br>';
        }
    }

    $result2 = getAllBoards();
    $html_boards = null;
    if ($result2) {
        $html_boards .= '<h3 style="text-align:center;">Rooms</h3>';
        while ($row = $result2->fetch_assoc()) {
            $row_reading_time = $row["last_request"];
            // Uncomment to set timezone to - 1 hour (you can change 1 to any number)
            $row_reading_time = date("d-m-Y H:i:sa");

            // Uncomment to set timezone to + 4 hours (you can change 4 to any number)
            //$row_reading_time = date("Y-m-d H:i:s", strtotime("$row_reading_time + 7 hours"));
            $html_boards .= '<h4><strong>Room ' . $row["board"] . '</strong> - Last Request Time: '. $row_reading_time . ' IST</h4>';
        }
    }
?>

<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="esp-style.css">
        <title>MIBAiO IoT</title>
    </head>
<body>
    <h2>MIBAiO<br>Smart Home Dashboard</h2>
    <?php echo $html_buttons; ?>
    <?php echo $html_boards; ?>
    <br><br>
    <div><form onsubmit="return createOutput();">
        <h3>Create New Output</h3>
        <label for="outputName">Name</label>
        <input type="text" name="name" id="outputName"><br>
        <label for="outputBoard">Room ID</label>
        <input type="number" name="board" min="0" id="outputBoard">
        <label for="outputGpio">GPIO Number</label>
        <input type="number" name="gpio" min="0" id="outputGpio">
        <label for="outputState">Initial GPIO State</label>
        <select id="outputState" name="state">
          <option value="0">0 = OFF</option>
          <option value="1">1 = ON</option>
        </select>
        <input type="submit" value="Create Output">
        <p><strong>Note:</strong> in some devices, you might need to refresh the page to see your newly created buttons or to remove deleted buttons.</p>
    </form></div>

    <script>
        var coll = document.getElementsByClassName("wrap");
	    var i;
	    for (i = 0; i < coll.length; i++) 
	        {
  		    coll[i].addEventListener("click", function() 
		    {
    			this.classList.toggle("active");
    			var content = this.nextElementSibling;
    			if (content.style.maxHeight)
			    {
      				content.style.maxHeight = null;
    			} 
			    else 
			    {
      				content.style.maxHeight = content.scrollHeight + "px";
    			} 
  		    });
	        }
        
        function updateOutput(element) {
            var xhr = new XMLHttpRequest();
            if(element.checked){
                xhr.open("GET", "esp-outputs-action.php?action=output_update&id="+element.id+"&state=1", true);
            }
            else {
                xhr.open("GET", "esp-outputs-action.php?action=output_update&id="+element.id+"&state=0", true);
            }
            xhr.send();
        }

        function deleteOutput(element) {
            var result = confirm("Want to delete this output?");
            if (result) {
                var xhr = new XMLHttpRequest();
                xhr.open("GET", "esp-outputs-action.php?action=output_delete&id="+element.id, true);
                xhr.send();
                alert("Output deleted");
                setTimeout(function(){ window.location.reload(); });
            }
        }

        function createOutput(element) {
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "esp-outputs-action.php", true);

            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

            xhr.onreadystatechange = function() {
                if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
                    alert("Output created");
                    setTimeout(function(){ window.location.reload(); });
                }
            }
            var outputName = document.getElementById("outputName").value;
            var outputBoard = document.getElementById("outputBoard").value;
            var outputGpio = document.getElementById("outputGpio").value;
            var outputState = document.getElementById("outputState").value;
            var httpRequestData = "action=output_create&name="+outputName+"&board="+outputBoard+"&gpio="+outputGpio+"&state="+outputState;
            xhr.send(httpRequestData);
        }
    </script>
</body>
</html>

<html>
<head>
  <script defer src="https://widget-js.cometchat.io/v3/cometchatwidget.js"></script>
</head>

<body>
  <script>
  window.addEventListener('DOMContentLoaded', (event) => {
  	CometChatWidget.init({
  		"appID": "272848aff546b2ea",
  		"appRegion": "in",
  		"authKey": "17c9ca49e5310619e108ba158bf94b5cc29af58a"
  	}).then(response => {
  		console.log("Initialization completed successfully");
  		//You can now call login function.
  		CometChatWidget.login({
  			"uid": "cometchat-uid-2"
  		}).then(response => {
  			CometChatWidget.launch({
  				"widgetID": "5ee2298d-6b70-4399-8115-538fad031ad3",
  				"docked": "true",
  				"alignment": "left", //left or right
  				"roundedCorners": "true",
  				"height": "450px",
  				"width": "400px",
  				"defaultID": 'cometchat-uid-1', //default UID (user) or GUID (group) to show,
  				"defaultType": 'user' //user or group
  			});
  		}, error => {
  			console.log("User login failed with error:", error);
  			//Check the reason for error and take appropriate action.
  		});
  	}, error => {
  		console.log("Initialization failed with error:", error);
  		//Check the reason for error and take appropriate action.
  	});
  });
  </script>
</body>

</html> 
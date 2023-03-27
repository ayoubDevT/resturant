
function showNotification() {	
	if (!Notification) {
		$('body').append('<h4 style="color:red">*Browser does not support Web Notification</h4>');
		return;
	}
	if (Notification.permission !== "granted") {		
		Notification.requestPermission();
	} else {		
		$.ajax({
			url : "notif_manage.php",
			type: "POST",
			success: function(data,value) {
				var data = jQuery.parseJSON(data);
				console.log(data.title);
					var data_notif = data.value;
				
						//var theurl = data.value.title;//url;
						var notifikasi = new Notification(
							/*titel*/data.title, {
							icon: "ayoub.jpg",//icon,
							body: data.message,//message,
						});
						notifikasi.onclick = function () {
							window.open("plate.php"); 
							notifikasi.close();     
						};
						setTimeout(function(){
							notifikasi.close();
						}, 50000);
					
				
			},
			error: function(jqXHR, textStatus, errorThrown)	{}
		}); 
	}
};
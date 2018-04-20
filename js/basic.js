 
function remove_entry(redir_cont){
	
	if(confirm("Do you really want to remove entry?")){
		window.location=base_url + "index.php/"+redir_cont;
	}
	
}

function updatedept(vall,dept_id){
	 
	var formData = {dept_name:vall};
	$.ajax({
		 type: "POST",
		 data : formData,
			url: base_url + "index.php/update_department"+dept_id,
		success: function(data){
		$("#message").html(data);
			
			},
		error: function(xhr,status,strErr){
			//alert(status);
			}	
		});
	
}
function updateloc(vall,loc_id){
	 
	var formData = {loc_name:vall};
	$.ajax({
		 type: "POST",
		 data : formData,
			url: base_url + "index.php/update_location"+loc_id, 
		success: function(data){
		$("#message").html(data);
			
			},
		error: function(xhr,status,strErr){
			//alert(status);
			}	
		});
	
}
function updatedesig(vall,desig_id){
	 
	var formData = {desig_name:vall};
	$.ajax({
		 type: "POST",
		 data : formData,
			url: base_url + "index.php/update_designation/"+desig_id,
		success: function(data){
		$("#message").html(data);
			
			},
		error: function(xhr,status,strErr){
			//alert(status);
			}	
		});
	
}
$(function() {
  $("#type").on("change",function() {
	  
    var period = this.value;
    if (period=="") return; // please select - possibly you want something else here

    var report = "script/"+((period == "daily")?"d":"m")+"_report.php";
    loadXMLDoc(report,'responseTag');
    $('#responseTag').show();
    $('#list_report').hide();
    $('#formTag').hide(); 
  }); 
});
function attstatus(vall){
	if(vall=='half_day'){
		$("#on_time").css('display','block');
		$("#off_time").css('display','block');
	}else if(vall == 'half_day' || vall == 'absent'){
	$("#reason").css('display','block');
		$("#off_time").css('display','none');
		$("#on_time").css('display','none');
	}
	else if(vall == 'present'){
		$("#reason").css('display','none');
			$("#on_time").css('display','block');
		$("#off_time").css('display','block');
	}
	else{
			$("#off_time").css('display','none');
		    	$("#on_time").css('display','none');
			$("#reason").css('display','none');
	}
}


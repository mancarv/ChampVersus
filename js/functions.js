	var region1,region2;

	function change_Class(id_selec) 	//function to change of color(class) to the selections region 
	{
		var id_parent=document.getElementById(''+id_selec).parentNode.id; //id of the father element 
		$("#"+id_parent+" li").each(function (index) 
        {
        	$(this).removeClass();						//remove class ("Active")
		})
		$("#"+id_selec).addClass("active");				
		if(id_parent=="list_sup")						// if the region select was on the superior list or the inferior list
			region1=$('#'+id_selec+' > :nth-child(1)').html(); 
		else
			region2=$('#'+id_selec+' > :nth-child(1)').html(); 
	}
	
	$("#button_login").click(function()
	{
		var user=$("#messages_search").val();
		var user2=$("#messages_search2").val();
		if(validate(user,user2,region1,region2))
          window.open("versus.php?summoner1="+user+"&summoner2="+user2+"&region1="+region1+"&region2="+region2, "_self");
        else
			alert("You must select two players and their regions.");
		
		
	});

	function validate(user,user2,region1,region2)
	{
		if( user == null || user.length == 0 || /^\s+$/.test(user) ) 
		{
  			return false;
		}else if( user2 == null || user2.length == 0 || /^\s+$/.test(user2) ) 
		{
  			return false;
		}else if( region1 == null || region1.length == 0 || /^\s+$/.test(region1) ) 
		{
  			return false;
		}else if( region2 == null || region2.length == 0 || /^\s+$/.test(region2) ) 
		{
  			return false;
		}else
			return true;
	}
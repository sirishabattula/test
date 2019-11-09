
<script>
	
$(document).ready(function(){
       var hp=$("#hid_plan").val();
       var hs=$("#hid_status").val();
	  if(hp!='' || hs!='')
	  {
         
$('#example').DataTable({
	     'scrollY':        '50vh',
        'scrollCollapse': true,
	   "oLanguage": {
        "sEmptyTable":     "No Records Found for this period of time."
    },
      'serverMethod': 'post',
      'ajax': {
          'url':'<?php echo base_url();?>Reports/ReportsUserListAction',
		  'data':{
			  'se_plan':hp,
			  'se_status':hs
			  },
				"dataSrc": function(response) {

				  if (response.status == false) {
					alert(response.msg);
					return [];
				  }
				 		
				  return response.aaData;
				}
		    
      },
		    
      
	 'columns': [
            { "data": "aid" },
            { "data": "userid" },
            { "data": "email" },
            { "data": "fullname" },
            { "data": "state" },
            { "data": "e911_state" },
            { "data": "refferedby" },
            { "data": "ph_link" },
            { "data": "plan" },
            { "data": "bill_start_date" },
            { "data": "validity_date" },
            { "data": "select" }
      ]
	
   });
   

	  }  
  
   
});
		</script>
 <?php   
   $response = array(
		  "iTotalRecords" => $totalRecordwithFilter,
		  "iTotalDisplayRecords" => $totalRecords,
		  "aaData" => $data
		);

		echo json_encode($response);
		
		
		?>
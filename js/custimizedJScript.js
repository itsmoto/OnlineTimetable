$(document).ready(function(){

/*window.onload = function() { alert('window.onload alert'); };
  window.onunload = function(){};
  alert('inline alert'); */
    
    /*used to add last row katika table ya ya ku create timetable*/
   $('.add-row').click(function (){
    $('.create_table tr:last').after('<tr><td><input class="form-control"  type="text" placeholder="program (Certificate)..." name="cert[]"></td><td><input class="form-control"  type="text" placeholder="program (Diploma)..." name="diplo[]"></td><td><input class="form-control"  type="text" placeholder="program (Undergraduate)..." name="under[]"></td><td><input class="form-control"  type="text" placeholder="program (Postgraduate)..." name="post[]"></td></tr>');
        return false;
    });
    
    /*used to show and hide admin button*/
    $('.admin-link').click(function (){
       // $('.ul-admin').css('display','block');
       // $('.ul-admin').css('position','absolute');
        $(".ul-admin").toggle("slide");
    });
    
    

$('#levelofstudy').change(function(){
    
     //change select tag disabled
     
   var levelOfStudy = $('#levelofstudy option:selected').text();
   
    var opt = "<option value='1'>I</option>";
  
   var opt1 = "<option value='2'>II</option>";
   
    var opt2 = "<option value='3'>III</option>";
    var opt0 = "<option disabled selected>Year of study</option>";
    if(levelOfStudy==="Certificate"){
         
                $("#SelectaddOption").empty();               
              $("#SelectaddOption").append(opt);             
             //  $('#SelectaddOption').attr("disabled","disabled");               
              $('#SelectCourse').removeAttr('disabled'); 
                
            }else if(levelOfStudy==="Diploma"){
                 $("#SelectaddOption").empty();
                $("#SelectaddOption").append(opt0,opt,opt1);
                $('#SelectaddOption').removeAttr("disabled");
                $('#SelectCourse').removeAttr('disabled'); 
                
            }else if(levelOfStudy==="Undergraduate"){
                 $("#SelectaddOption").empty(); 
                $("#SelectaddOption").append(opt0,opt,opt1,opt2);
                $('#SelectaddOption').removeAttr("disabled");
                $('#SelectCourse').removeAttr('disabled'); 
                
            }else{
                 $("#SelectaddOption").empty();
                $("#SelectaddOption").append(opt);
               //  $('#SelectaddOption').attr("disabled","disabled");
                 $('#SelectCourse').removeAttr('disabled'); 

                
            }
    
}); 


$('#levelofstudy').change(function(){
                                $("#SelectCourse").empty();
                                    var LOFSTUDY = $('#levelofstudy option:selected').text();
                                    var opt = "<option disabled selected>select program</option>";
                                $.post('pages/ajax.php',{levelofstudy:LOFSTUDY},function(result){
                                $("#SelectCourse").append(opt,result);
                              //$('#SelectCourse').html(result).show();
                                  });
                               });

});

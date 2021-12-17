/* alert('hello');  */
$(document).ready(function(){

var quantitiy=0;
$('.quantity-right-plus').click(function(e){
     
     // Stop acting like a button
     e.preventDefault();
     // Get the field name
     var quantity = parseInt($('.quantities').val());
     
     // If is not undefined
         
         $('.quantities').val(quantity + 1);

       
         // Increment
     
 });

  $('.quantity-left-minus').click(function(e){
     // Stop acting like a button
     e.preventDefault();
     // Get the field name
     var quantity = parseInt($('.quantities').val());
     
     // If is not undefined
   
         // Increment
         if(quantity>0){
         $('.quantities').val(quantity - 1);
         }
 });
 
});


// Validation
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
    'use strict'
  
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.querySelectorAll('.needs-validation')
  
    // Loop over them and prevent submission
    Array.prototype.slice.call(forms)
      .forEach(function (form) {
        form.addEventListener('submit', function (event) {
          if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
          }
  
          form.classList.add('was-validated')
        }, false)
      })
  })()

//   for check select option in filter modal
let expanded = false;

function showCheckboxes() {
  let checkboxes = document.getElementById("checkboxes");
  if (!expanded) {
    checkboxes.style.display = "block";
    expanded = true;
  } else {
    checkboxes.style.display = "none";
    expanded = false;
  }
}

// 

$(".multiple_select").mousedown(function(e) {
    if (e.target.tagName == "OPTION") 
    {
      return; //don't close dropdown if i select option
    }
    $(this).toggleClass('multiple_select_active'); //close dropdown if click inside <select> box
});
$(".multiple_select").on('blur', function(e) {
    $(this).removeClass('multiple_select_active'); //close dropdown if click outside <select>
});
	
$('.multiple_select option').mousedown(function(e) { //no ctrl to select multiple
    e.preventDefault(); 
    $(this).prop('selected', $(this).prop('selected') ? false : true); //set selected options on click
    $(this).parent().change(); //trigger change event
});

	
	$("#myFilter").on('change', function() {
      var selected = $("#myFilter").val().toString(); //here I get all options and convert to string
      var document_style = document.documentElement.style;
      if(selected !== "")
        document_style.setProperty('--text', "'Selected: "+selected+"'");
      else
        document_style.setProperty('--text', "'Select values'");
	});



    
    //dashboard sidebar details
    $('.btn').click(function(){
        $(this).toggleClass("click");
        $('.sidebar').toggleClass("show");
        });
        
        $('.sidebar ul li a').click(function(){
        var id = $(this).attr('id');
        $('nav ul li ul.item-show-'+id).toggleClass("show");
        $('nav ul li #'+id+' span').toggleClass("rotate");
        
        });
        
        $('nav ul li').click(function(){
        $(this).addClass("active").siblings().removeClass("active");
        });
         

        // dashboard sidebar details
        $(document).ready(function(){
          $("#sidebarCollapse").on('click', function(){
          $("#sidebar").toggleClass('active');
          });
          
          });


  //clone
  
  $("a#add-more").cloneData({
    mainContainerId: "main-container", // Main container Should be ID
    cloneContainer: "container-item", // Which you want to clone
    removeButtonClass: "remove-item", // Remove button for remove cloned HTML
    removeConfirm: true, // default true confirm before delete clone item
    removeConfirmMessage: "Are you sure want to delete this field?", // confirm delete message
    //append: '<a href="javascript:void(0)" class="remove-item btn btn-sm btn-danger remove-social-media">Remove</a>', // Set extra HTML append to clone HTML
    minLimit: 1, // Default 1 set minimum clone HTML required
    maxLimit: 200, // Default unlimited or set maximum limit of clone HTML
    defaultRender: 1,
    init: function () {
      console.info(":: Initialize Plugin ::");
    },
    beforeRender: function () {
      console.info(":: Before rendered callback called");
    },
    afterRender: function () {
      console.info(":: After rendered callback called");
    },
    afterRemove: function () {
      console.warn(":: After remove callback called");
    },
    beforeRemove: function () {
      console.warn(":: Before remove callback called");
    },
  });


  // for data tables
        $(document).ready(function() {
              $('#dataTable').DataTable();
        });
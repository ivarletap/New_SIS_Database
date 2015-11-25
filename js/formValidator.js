$("#year").datepicker({
						format: " yyyy",
						viewMode: "years", 
						minViewMode: "years"
					});
			
			
  var j = jQuery.noConflict();
    j(document).ready(function () {// jQuery and Bootstrap JS 
	

	
	var validator = j("#editorialBoardInforamtion").bootstrapValidator({
            feedbackIcons: {
                valid: "glyphicon glyphicon-ok",
                invalid: "glyphicon glyphicon-remove",
                validating: "glyphicon glyphicon-refresh"
            },
            live: 'enabled',
            submitButtons: 'button[type="submit"]',
            submitHandler: function(validator, form, submitButton) {

                j.ajax({
                    type: "POST",
                    //url: "../lib/newStudentSQLProcess.php",
                    data: $('#editorialBoardInforamtion').serialize(),
                    success: function(msg){
                        j("#editorialBoardInforamtion").addClass("hidden");
                        j("#submission").addClass("hidden");
                        j("#confirmation").removeClass("hidden");
                    },
                    error: function(){
                        alert("error");
                    }
                });//close ajax
            },
            fields : {
                firstName:{
                    message : "Professor's first name is required",
                    validators : {
                        notEmpty : {
                            message : "Provide a valid first name"
                        },
                        regexp: {
                            regexp: /^[a-z\s]+$/i,
                            message: 'The professor\'s first name can consist of alphabetical characters and spaces only'
                        }
                    }
                },
                lastName:{
                    message : "Professor's first name is required",
                    validators : {
                        notEmpty : {
                            message : "Provide a valid last name"
                        },
                        regexp: {
                            regexp: /^[a-z\s]+$/i,
                            message: 'The professor\'s last name can consist of alphabetical characters and spaces only'
                        }
                    }
                },
                birthDate: {
                    validators: {
                        notEmpty: {
                            message: 'The date is required'
                        },
                        date: {
                            format: 'MM/DD/YYYY',
                            message: 'The date is not a valid'
                        }
                    }
                },
                email :{
                    message : "Email address is required",
                    validators : {
                        notEmpty : {
                            message : "Please provide an email address"
                        },
                        stringLength: {
                            min : 6,
                            max: 35,
                            message: "Email address must be between 6 and 35 characters long"
                        },
                        emailAddress: {
                            message: "Email address was invalid"
                        }
                    }
                },
                gender : {
                    validators: {
                        notEmpty : {
                            message : "Please select a gender."
                        }
                    }
                },
                address : {
                    validators: {
                        notEmpty : {
                            message: "Please enter an address."
                        }
                    }
                },
                city : {
                    validators:{
                        notEmpty:{
                            message: "Please enter the city."
                        },
                        regexp: {
                            regexp: /^[a-z\s]+$/i,
                            message: 'The City can consist of alphabetical characters and spaces only'
                        }
                    }
                },
                province : {
                    validators:{
                        notEmpty:{
                            message: "Please enter the province."
                        },
                        regexp: {
                            regexp: /^[a-z\s]+$/i,
                            message: 'The Province can consist of alphabetical characters and spaces only'
                        }
                    }
                },
                postalCode : {
                    validators: {
                        zipCode: {
                            country: 'CA',
                            message: 'The value is not a valid Canadian Postal Code'
                        }
                    }
                },
                country : {
                    validators:{
                        notEmpty:{
                            message: "Please chose a country."
                        }
                    }
                },
                phoneNumber : {
                    validators:{
                        notEmpty:{
                            message: "Please enter a phone number."
                        },
                        phone: {
                            country: 'US',
                            message: "Please enter a valid phone number"
                        }
                    }
                },
                studentNumber : {
                    validators:{
                        notEmpty:{
                            message: "Please enter a studentNumber."
                        },
                        stringLength: {
                            min : 8,
                            max: 8,
                            message: "Student number must be 8 digits long"
                        },
                        integer: {
                            message: 'Please enter only digits.'
                        }
                    }
                },
                type : {
                    validators:{
                        notEmpty:{
                            message: "Please enter a student type."
                        }
                    }
                },
                status : {
                    validators:{
                        notEmpty:{
                            message: "Please enter a student status."
                        }
                    }
                },
                position : {
                    validators:{
                        notEmpty:{
                            message: "Please enter a student position."
                        },
                        regexp: {
                            regexp: /^[a-z\s]+$/i,
                            message: 'The student position can consist of alphabetical characters and spaces only'
                        }
                    }
                },
                level : {
                    validators:{
                        notEmpty:{
                            message: "Please enter a student level."
                        }
                    }
                },
                summer : {
                    validators:{
                        notEmpty:{
                            message: "Please choose a value."
                        }
                    }
                },
                department : {
                    validators:{
                        notEmpty:{
                            message: "Please enter a student department."
                        }
                    }
                }

            }
        });
	}
// Class definition
var KTFormControls = function () {
	// Private functions
	var _initDemo1 = function () {
		FormValidation.formValidation(
			document.getElementById('kt_form_1'),
			{
				fields: {
					
					company_name: {
						validators: {
							notEmpty: {
								message: 'Company Name is required'
							},
							company_name: {
								message: 'The Company Name is not valid'
							}
						}
					},

					company_reg_no: {
						validators: {
							notEmpty: {
								message: 'Company Registration Number is required'
							},
							company_reg_no: {
								message: 'The Company Registration Number not valid'
							}
						}
					},


					contact_person: {
						validators: {
							notEmpty: {
								message: 'Contact Persons is required'
							},
							contact_person: {
								message: 'The Contact Persons not valid'
							}
						}
					},

					email: {
						validators: {
							notEmpty: {
								message: 'Email is required'
							},
							emailAddress: {
								message: 'The value is not a valid email address'
							}
						}
					},

					pass: {
						validators: {
							notEmpty: {
								message: 'Password is required'
							},
							pass: {
								message: 'The Password not valid'
							}
						}
					},

					company_address: {
						validators: {
							notEmpty: {
								message: 'Company Address is required'
							},
							company_address: {
								message: 'The Company Address not valid'
							}
						}
					},

					post_code: {
						validators: {
							notEmpty: {
								message: 'Post Code is required'
							},
							post_code: {
								message: 'The Post Code not valid'
							}
						}
					},

					country: {
						validators: {
							notEmpty: {
								message: 'Please select a Country'
							}
						}
					},

					state: {
						validators: {
							notEmpty: {
								message: 'Please select a State'
							}
						}
					},

					tel_no: {
						validators: {
							notEmpty: {
								message: 'Telephone number is required'
							},
							tel_no: {
								message: 'The value is not a valid Telephone number'
							}
						}
					},

					
				},

				plugins: { //Learn more: https://formvalidation.io/guide/plugins
					trigger: new FormValidation.plugins.Trigger(),
					// Bootstrap Framework Integration
					bootstrap: new FormValidation.plugins.Bootstrap(),
					// Validate fields when clicking the Submit button
					submitButton: new FormValidation.plugins.SubmitButton(),
            		// Submit the form when all fields are valid
            		defaultSubmit: new FormValidation.plugins.DefaultSubmit(),
            	}
            }
            );
	}

	var _initDemo2 = function () {
		FormValidation.formValidation(
			document.getElementById('kt_form_2'),
			{
				fields: {
					billing_card_name: {
						validators: {
							notEmpty: {
								message: 'Card Holder Name is required'
							}
						}
					},
					billing_card_number: {
						validators: {
							notEmpty: {
								message: 'Credit card number is required'
							},
							creditCard: {
								message: 'The credit card number is not valid'
							}
						}
					},
					billing_card_exp_month: {
						validators: {
							notEmpty: {
								message: 'Expiry Month is required'
							}
						}
					},
					billing_card_exp_year: {
						validators: {
							notEmpty: {
								message: 'Expiry Year is required'
							}
						}
					},
					billing_card_cvv: {
						validators: {
							notEmpty: {
								message: 'CVV is required'
							},
							digits: {
								message: 'The CVV velue is not a valid digits'
							}
						}
					},

					billing_address_1: {
						validators: {
							notEmpty: {
								message: 'Address 1 is required'
							}
						}
					},
					billing_city: {
						validators: {
							notEmpty: {
								message: 'City 1 is required'
							}
						}
					},
					billing_state: {
						validators: {
							notEmpty: {
								message: 'State 1 is required'
							}
						}
					},
					billing_zip: {
						validators: {
							notEmpty: {
								message: 'Zip Code is required'
							},
							zipCode: {
								country: 'US',
								message: 'The Zip Code value is invalid'
							}
						}
					},

					billing_delivery: {
						validators: {
							choice: {
								min:1,
								message: 'Please kindly select delivery type'
							}
						}
					},
					package: {
						validators: {
							choice: {
								min:1,
								message: 'Please kindly select package type'
							}
						}
					}
				},

				plugins: {
					trigger: new FormValidation.plugins.Trigger(),
					// Validate fields when clicking the Submit button
					submitButton: new FormValidation.plugins.SubmitButton(),
            		// Submit the form when all fields are valid
            		defaultSubmit: new FormValidation.plugins.DefaultSubmit(),
					// Bootstrap Framework Integration
					bootstrap: new FormValidation.plugins.Bootstrap({
						eleInvalidClass: '',
						eleValidClass: '',
					})
				}
			}
			);
	}




var _initDemo3 = function () {
		FormValidation.formValidation(
			document.getElementById('submit_vendor_form'),
			{
				fields: {
					
					isbn: {
						validators: {
							notEmpty: {
								message: 'Company Name is required'
							},
							isbn: {
								message: 'The Company Name is not valid'
							}
						}
					},

					author: {
						validators: {
							notEmpty: {
								message: 'Company Registration Number is required'
							},
							author: {
								message: 'The Company Registration Number not valid'
							}
						}
					},


					publisher: {
						validators: {
							notEmpty: {
								message: 'Contact Persons is required'
							},
							publisher: {
								message: 'The Contact Persons not valid'
							}
						}
					},

					yearofpub: {
						validators: {
							notEmpty: {
								message: 'Email is required'
							},
							yearofpub: {
								message: 'The value is not a valid email address'
							}
						}
					},

					price: {
						validators: {
							notEmpty: {
								message: 'Password is required'
							},
							price: {
								message: 'The Password not valid'
							}
						}
					},					
				},

				plugins: { //Learn more: https://formvalidation.io/guide/plugins
					trigger: new FormValidation.plugins.Trigger(),
					// Bootstrap Framework Integration
					bootstrap: new FormValidation.plugins.Bootstrap(),
					// Validate fields when clicking the Submit button
					submitButton: new FormValidation.plugins.SubmitButton(),
            		// Submit the form when all fields are valid
            		defaultSubmit: new FormValidation.plugins.DefaultSubmit(),
            	}
            }
            );
	}
	return {
		// public functions
		init: function() {
			_initDemo1();
			_initDemo2();
			_initDemo3();
		}
	};
}();

jQuery(document).ready(function() {
	KTFormControls.init();
});

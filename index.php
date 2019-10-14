<?php 	
	$param = $_SERVER['REQUEST_URI'];

	switch ($param) {
		case "/api/v1/addresses":
			$result = '
				{
				  "data": {
					"type": "address", 
					"attributes": { 
						"address_line_1": "4 Privet Drive",
						"address_line_2": "Little Whinging",
						"first_name": "Harry",
						"last_name": "Potter",
						"zip_code": "123456",
						"state_id": 1493,
						"country_id": 80,
						"city": "Surrey",
						"phone": "1212121212",
						"alternate_phone": "1212121212"
				  
					},
					"relationships": {
					  "user": {
					   "data": {
					   "id": 4
					   }
					  }
					}
				  }
				}';
			break;
		
		case "/api/v1/countries":
			$result = '';
			break;
		case "/api/v1/logout":
			$result = '';
			break;
		case "/api/v1/login":
			$result = '
				{
					"data": {
							"attributes": {
							  "email": "harry_potter@aviabird.com",
							  "password": "somepassword"
							}
					}
				}';
			break;
		case "/api/v1/register":
			$result = '
				{
				 "data": {
				  "type": "user",
				  "attributes": {
					"first_name": "Harry",
					"last_name": "potter",
					"email": "harry_potter@aviabird.com",
					"password": "somepassword",
					"password_confirmation": "somepassword"
				  } 
				 } 
				}';
			break;
		case "/api/v1/addresses":
			$result = '';
			break;
		case "/api/v1/current_user":
			$result = '';
			break;
		case "/api/v1/products":
			$result = '';
			break;
		case "/api/v1/orders/current":
			$result = '';
			break;
		case "/api/v1/orders":
			$result = '';
			break;
		case "/api/v1/reviews":
			$result = '
			{
			  "data": {
				"type": "reviews",
				"attributes": {
				  "title": "Nice T-Shirt",
				  "description": "Nice fabric with nice color. Go for it.",
				  "name": "Harry",
				  "locale": "en"
				},
				"relationships": {
				  "user": {
					"data": {
					  "type": "users",
					  "id": 2
					}
				  },
				  "product": {
					"data": {
					  "type": "products",
					  "id": 4
					}
				  },
				  "rating_option": {
					"data": {
					  "type": "rating_options",
					  "id": 5
					}
				  }
				}
			  }
			}';
			break;
		case "/api/v1/ratings/1/":
			$result = '';
			break;
		case "/api/v1/ratings":
			$result = '';
			break;
		case "/api/v1/brands":
			$result = '';
			break;
		case "/api/v1/taxonomies":
			$result = '';
			break;
		case "/api/v1/payment/payment-methods":
			$result = '';
			break;
		case "/api/v1/hosted-payment/payubiz-request":
			$result = '
			{
				"data": {
					"attributes": {
						"order_id": 6,
						"payment_id": 2,
						"order_number": "0PYPVEqTerQSyQGW4lvt6",
						"payment_method_id": 1,
						"amount": "800.00",
						"product_info": "Nimbus 2000 broom Brown",
						"first_name": "Hermoine",
						"email": "hermoine@aviabird.com"
					}
				}
			}';
			break;
		case "/api/v1/payment/cod_payment":
			$result = '
			{
			  "data": {
				"type": "orders",
				"attributes": {
				  "order_id": 7
				}
			  }
			}';
			break;
		case "/api/v1/line_items":
			$result = '
			{
				"data": {
					"type": "line_item",
					"attributes": {
					"quantity": 1
					},
					"relationships": {
						"order": {
							"data": {
								"id": 4,
								"type": "order"
							}
						},
						"product": {
							"data": {
								"id": 14,
								"type": "product"
							}
						}
					}
				}
			}';
			break;
		
		default:
			$result = '';
	}
	
	echo json_encode($result);exit;
?>
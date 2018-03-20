var shg_name, member_count, leader, contact, aadhar, address, district,city, state, zipcode, product;
var member_name = [], member_age = [], member_aadhar = [];
var name, age;

function _(x) {
	return document.getElementById(x);
}

function processPhase1() {
	shg_name = _("shg_name").value;
	member_count = _("member_count").value;
	leader = _("leader").value;
	contact = _("contact").value;
	aadhar = _("aadhar").value;
	address = _("address").value;
	district = _("district").value;
	city = _("city").value;
	state = _("state").value;
	zipcode = _("zipcode").value;
	product = _("product").value;

	if ( shg_name.length > 0 && member_count.length > 0 && leader.length > 0 && contact.length > 0 && aadhar.length && address.length > 0 && city.length > 0 && state.length > 0 && zipcode.length > 0 && product.length > 0 ) {
		for ( var i = 0 ; i < member_count ; i++ ) {
			
			$("#phase2").append(`	
									<div>
										<div>
											<label for="member_name-` + i + `">Name</label>
											<input type="text" name="member_name-` + i + `" id="member_name-` + i + `"/>
										</div>
										<div>
											<label for="age-` + i + `">Age</label>
											<input type="number" name="age-` + i + `" id="age-` + i + `"/>
										</div>
										<div>
											<label for="aadhar-` + i + `">Aadhar Card No:</label>
											<input type="text" name="aadhar-` + i + `" id="aadhar-` + i + `"/>
										</div>
									</div>
									<br />
									<hr />
									<br />
								`);
		}

		$("#phase2").append('<button onclick="processPhase2()">Continue</button>');

		_("phase1").style.display = "none";
		_("phase2").style.display = "block";
	} else {
		alert("Please fill in the fields");
	}
}

function processPhase2() {

	member_name = [], member_age = [], member_aadhar = [];

	for ( var i = 0 ; i < member_count ; i++ ) {

		name = _("member_name-" + i).value;
		age = _("age-" + i).value;
		aadhar = _("aadhar-" + i).value;

		if ( name.length > 0 && age.length > 0) {
			member_name.push(name);
			member_age.push(age);
			member_aadhar.push(aadhar);
		} else {
			break
			console.log("break");
		}
	}	

	if ( i == member_count ) {
		_("phase2").style.display = "none";

		//displaying SHG information
		_("display_shg_name").innerHTML = shg_name;
		_("display_member_count").innerHTML = member_count;
		_("display_leader_name").innerHTML = leader;
		_("display_contact_no").innerHTML = contact;
		_("display_aadhar_card").innerHTML = aadhar;
		_("display_address").innerHTML = address;
		_("display_city").innerHTML = city;
		_("display_district").innerHTML = district;
		_("display_state").innerHTML = state;
		_("display_zipcode").innerHTML = zipcode;
		_("display_product").innerHTML = product;

		console.log(member_name);
		console.log(member_age);

		//displaying team members list
		for ( var i = 0 ; i < member_count ; i++) {
			$("#team").append(`<div class="member">
												Name:` + member_name[i] + `<br/>
												Age:` + member_age[i] + `<br />
												Aadhar card Number: ` + member_aadhar[i] + `<br/ >
											</div>`);
		}
		_("phase3").style.display = "block";
	} else {
		alert("Please fill in the fields");
	}
}

function submitForm(){
	_("multiphase").method = "post";
	_("multiphase").action = "php/register_shg.php";
	_("multiphase").submit();
}
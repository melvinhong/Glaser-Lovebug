@extends('layouts.app')

@section('content')
		<h1>Lovebug User information</h1>
		
			<table>
				<tr>
					<td>Name :</td>
					<td><input type="text" name="username" required></td>
				</tr>
				<tr>
					<td>Age:</td>
					<td><input type="age" name="age" required></td>
				</tr>
				<tr>
					<td>Gender :</td>
					<td>
						<input type="radio" name="gender" value="female" required>Female
						<input type="radio" name="gender" value="male" required>Male
						<input type="radio" name="gender" value="transgender" required>Transgender
						<input type="radio" name="gender" value="nottosay" required>Prefer not to say
					</td>
				</tr>
				<tr>
					<td>Location :</td>
					<td>
						<select name="location" required>

							<option value="vic">Victoria</option>
							<option value="nsw">New South Wales</option>
							<option value="qld">Queensland</option>
							<option value="sa">South Australia</option>
							<option value="wa">Western Australia</option>
							<option value="tas">Tasmania</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Ethnic background:</td>
					<td>
						<select name="ethnic" required>
							<option value="british">British</option>
							<option value="irish">Irish</option>
							<option value="italian">Italian</option>
							<option value="german">German</option>
							<option value="chinese">Chinese</option>
							<option value="aboriginalaustralian">Aboriginal Australian</option>
							<option value="indian">Indian</option>
							<option value="greek">Greek</option>
							<option value="dutch">Dutch</option>
							<option value="other">Other</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Hair color :</td>
					<td>
						<select name="haircolor" required>
							<option value="black">black</option>
							<option value="brown">brown</option>
							<option value="blond">blond</option>
							<option value="auburn">auburn</option>
							<option value="white">gray/white</option>
						</select>
					</td>
				</tr>

				<tr>
					<td>Eye color :</td>
					<td>
						<select name="eyecolor" required>
							<option value="amber">amber</option>
							<option value="blue">blue</option>
							<option value="brown">brown</option>
							<option value="gray">gray</option>
							<option value="green">green</option>
							<option value="hazel">hazel</option>
							<option value="red">red</option>
							<option value="violet">violet</option>

						</select>
					</td>
				</tr>

				<tr>
					<td>Skin color :</td>
					<td>
						<select name="skincolor" required>
							<option selected hidden="">If your skin color not list here plz contact us</option>
							<option value="black">black</option>
							<option value="yelllow">yellow</option>
							<option value="white">white</option>
						</select>
					</td>
				</tr>

				<tr>
					<td>Hobbies:</td>
					<td>
						<select name="hobbies" required>
							<option selected hidden value=""> more hobbies on adding...</option>
							<option value="tsports"> traditional sports</option>
							<option value="advt">outdoor advantures</option>
							<option value="tvs">watch tv series/movies</option>
							<option value="writing">Writing</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Relationship perfer::</td>
					<td>
						<select name="relationship" required>

							<option value="shortterm"> Short term</option>
							<option value="longterm">Long term</option>
							<option value="ons">One night stand</option>
							<option value="friendship">Just friendship</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Occupation:</td>
					<td>
						<select name="occupation" required>

							<option value="student">Student</option>
							<option value="engineer">Engineer</option>
							<option value="worker">Worker</option>
							<option value="administrator">Administrator</option>
							<option value="teacher">teacher</option>
							<option value="accountant">Accountant</option>
							<option value="auditor">Auditor</option>
							<option value="artist">Artist</option>
							<option value="doctor">doctor</option>
							<option value="nottosay">Others/perfer not to say</option>


						</select>
					</td>
				</tr>
				<tr>

					<td><input type="submit" value="Submit"></td>





				</tr>
			</table>

	@endsection

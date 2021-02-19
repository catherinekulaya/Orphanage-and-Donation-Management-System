@extends('user.main')

@section('content')

<form action="//submit.form" id="ContactUs100" method="post" onsubmit="return ValidateForm(this);">
    <script type="text/javascript">
    function ValidateForm(frm) {
    if (frm.Name.value == "") { alert('Name is required.'); frm.Name.focus(); return false; }
    if (frm.FromEmailAddress.value == "") { alert('Email address is required.'); frm.FromEmailAddress.focus(); return false; }
    if (frm.FromEmailAddress.value.indexOf("@") < 1 || frm.FromEmailAddress.value.indexOf(".") < 1) { alert('Please enter a valid email address.'); frm.FromEmailAddress.focus(); return false; }
    if (frm.Comments.value == "") { alert('Please enter comments or questions.'); frm.Comments.focus(); return false; }
    return true; }
    </script>
    <table style="width:100%;max-width:550px;border:0;" cellpadding="8" cellspacing="0">
    <tr>
        <h1> Contact Us</h1>
        <p style="text-align:center"> Contact Us </p> <td>
    <label for="Name">Name*:</label>
    </td> <td>
    <input name="Name" type="text" maxlength="100%" style="width:100%;max-width:250px;" />
    </td> </tr> <tr> <td>
    <label for="PhoneNumber">Phone number:</label>
    </td> <td>
    <input name="PhoneNumber" type="text" maxlength="43" style="width:100%;max-width:250px;" />
    </td> </tr> <tr> <td>
    <label for="FromEmailAddress">Email address*:</label>
    </td> <td>
    <input name="FromEmailAddress" type="text" maxlength="90" style="width:100%;max-width:250px;" />
    </td> </tr> <tr> <td>
    <label for="Comments">Comments*:</label>
    </td> <td>
    <textarea name="Comments" rows="7" cols="40" style="width:100%;max-width:350px;"></textarea>
    </td> </tr> <tr> <td>
    * - required fields
    </td> <td>
    <input name="skip_Submit" type="submit" value="Submit" />
    </td> </tr>
    </table>
    </form>
@endsection

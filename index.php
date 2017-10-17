<!DOCTYPE Html>
<html>
 <head>
 	<title> Email Boster 10.01 </title>
 	<script type="text/javascript" src="jquery-1.8.3.min.js" ></script>
 	<link rel="stylesheet" href="styleme.css">
 </head>
<body>
<div class="mailer_hold_all">
<div class="heading"> Email Boster 1.04 </div>
<div class="inner_holder">
    <form method="POST">
        <div class="top_border"></div>
        <table>
            <tr>
            <td width="200px">
            <label>Input Email:</label>
            </td>
                <td>
                     <textarea class="textareaVal2" id="bodyCmpose"></textarea>
                </td>
            </tr>

            <tr>
                <td></td>
                <td>
                    <div style="text-align: center;"><label>Find:</label><label style="margin-left: 38px;"><input type="text" class="inputVal" id="findVal"  /></label></div>
                </td>
            </tr>

            <tr>
                <td></td>
                <td>
                    <div style="text-align: center;"><label>Replace:</label><label style="margin-left: 14px;"><input type="text" class="inputVal" id="replaceVal" /></label></div>
                </td>
            </tr>

            <tr>
                <td width="200px">
                </td>
                <td>
                    <div style="text-align: center;"><input type="button" name="trigerme" id="replacebtn" value="Replace" /></div>
                </td>
            </tr>
        </table>


        <div style="text-align: center; margin-top: 30px;"><input type="button" name="trigerme" id="sendEmails" value="Clean" /></div>
        </div>
        </div>
    </form>
</body>
</html>
<script type="text/javascript">
$(document).ready(function()
{
    $("#replacebtn").on("click", function()
    {
        var find = $("#findVal").val();
        var findReg = new RegExp(find, 'g');
        var replace = $("#replaceVal").val();
        var oldmssg = $("#bodyCmpose").val();
        $("#bodyCmpose").each(function()
        {
            var mssg = $(this).val();
            var newMssg = mssg.replace(findReg, replace);
            var Newmssg = $("#bodyCmpose").val(newMssg);
            if(newMssg == oldmssg)
            {
                alert("No match found!");
            } 				
        })
    })

    $("#sendEmails").on("click", function()
    {
        mssg = $("#bodyCmpose").val();
        result = mssg.match(/([a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+\.[a-zA-Z0-9._-]+)/gi);
        $("#bodyCmpose").val(result);
    })
});
</script>

 function EmailSend(Reqdata)
 {

    try {
                
                ExecutePageMethod(Reqdata, OnSuccess, OnFailure);
               
            }
            catch (e) {
                alert(e);
            }
 }
 function OnSuccess(result) {
    // if(k=="1")
    //     alert("Appointment Sent Sucessfully!!..Our Executive contact soon!!");
    
 }
 function OnFailure(xhr, status, error) {
        var err = eval("(" + xhr.responseText + ")");
        alert(err.Message);
    }



    //<Root>
    //    <ToID>asukkoorj@gmail.com</ToID>
    //    <Subject> ForgotPassword- TransactionNotes   </Subject>
    //    <Message> Your  Password is 5643  </Message>
    //    <Remarks>  ForgotPassword  </Remarks>
    //</Root>
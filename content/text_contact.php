      <div class="container">
            <h1>contact us</h1>
            <form name="sendForm" id="sendForm" action="send.php" method="POST">
            <table>
                <tr>
                    <td>Name:</td>
                    <td>
                        <input type="text" id="name" name="name">
                        <span id="nameInfo"></span>
                    </td>
                   
                </tr>
                <tr>
                     <td>Email:</td>
                    <td>
                        <input type="text" id="email" name="email" >
                        <span id="emailInfo"></span>

                    </td>
                </tr>
                 <tr>
                     <td>Contact No:</td>
                    <td>
                        <input type="text" id="contactNo" name="contactNo">
                        <span id="contactNoInfo"></span>
                    </td>
                </tr>
                <tr>
                     <td>Subject:</td>
                    <td>
                        <input type="text" id="subject" name="subject">
                          <span id="subjectInfo"></span>
                    </td>
                </tr>
                 <tr>
                     <td valign="top">Message:</td>
                    <td>
                        <textarea type="text" id="message" cols="60" rows="10" name="message"></textarea>
                        <br/>
                        <span id="messageInfo"></span>
                        
                    </td>
                     
                </tr>
                <tr>
                    <td colspan="2" align="right"> <input type="submit" value="Send" id="sendButton" name="sendButton" /></td>
                </tr>
                
            </table>
                </form>
        </div>


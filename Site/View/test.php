<?php
?>
                    <form name="enq" method="post" action="index.php?action=email" onsubmit="return validation();">
                        <fieldset>

                            <input type="text" name="name" id="name" value=""  class="input-block-level" placeholder="Name" required/>
                            <input type="text" name="email" id="email" value="" class="input-block-level" placeholder="Email" required />
                            <textarea rows="11" name="message" id="message" class="input-block-level" minlength="15" placeholder="Comments"></textarea>
                            <div class="actions">
                                <input type="submit" value="Send Your Message" name="submit" id="submitButton" class="btn btn-info pull-right" title="Click here to submit your message!" />
                            </div>

                        </fieldset>
                    </form>


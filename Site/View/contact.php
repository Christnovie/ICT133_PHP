<?php
/**
 * Site - contact.php
 *version : ${VERSION}
 *Initial version by: Christnovie.KIALA-BI
 *Initial version created on : 06.01.2020
 *Time : 14:10
 */
/** tampon de fliux stocké en mémoire */
ob_start();
$titre = "Rent a show - Acceuil";
?>

    <div class="contentArea">

        <div class="divPanel notop page-content">



            <div class="row-fluid">
                <div class="span8" id="divMain">

                    <h1>Contact Us</h1>
                    <h3 style="color:#FF6633;"><?php echo @$_GET['msg'];?></h3>
                    <hr>
                    <!--Start Contact form -->
                    <form name="enq" method="post" action="index.php?action=email" onsubmit="return validation();">
                        <fieldset>

                            <input type="text" name="name" id="name" value="<?= $_SESSION['login']?>"  class="input-block-level" placeholder="Name" required/>
                            <input type="text" name="email" id="email" value="" class="input-block-level" placeholder="Email" required />
                            <textarea rows="11" name="message" id="message" class="input-block-level" minlength="15" placeholder="Comments"></textarea>
                            <div class="actions">
                                <input type="submit" value="Send Your Message" name="submit" id="submitButton" class="btn btn-info pull-right" title="Click here to submit your message!" />
                            </div>

                        </fieldset>
                    </form>
                    <!--End Contact form -->
                </div>

                <!--Edit Sidebar Content here-->
                <div class="span4 sidebar">

                    <div class="sidebox">
                        <h3 class="sidebox-title">Contact Information</h3>
                        <p>
                        <address><strong>CPNV</strong><br />
                            Avenue de la gare 11<br />
                            1050 Saint-Croix<br />
                            <abbr title="Phone">Tel:</abbr> +41 77 913 05 64</address>
                        <address>  <strong>Email</strong><br />
                            <a href="mailto:Christnovie.kiala-binga@cpnv.ch">Christnovie.kiala-binga@cpnv.ch</a></address>
                        </p>

                        <!-- Start Side Categories -->
                        <h4 class="sidebox-title">Sidebar Categories</h4>
                        <ul>
                            <li><a href="#">Quisque diam lorem sectetuer adipiscing</a></li>
                            <li><a href="#">Interdum vitae, adipiscing dapibus ac</a></li>
                            <li><a href="#">Scelerisque ipsum auctor vitae, pede</a></li>
                            <li><a href="#">Donec eget iaculis lacinia non erat</a></li>
                            <li><a href="#">Lacinia dictum elementum velit fermentum</a></li>
                            <li><a href="#">Donec in velit vel ipsum auctor pulvinar</a></li>
                        </ul>
                        <!-- End Side Categories -->

                    </div>



                </div>
                <!--/End Sidebar Content-->


            </div>

            <div id="footerInnerSeparator"></div>
        </div>
    </div>

<?php
$content = ob_get_clean();
require 'gabarit.php';

?>
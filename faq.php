<?php include('header.php'); ?>
	<div class="pt-1 pb-1 bg-red d-none d-md-block anytime-breadcrumb">
        <div class="container">
            <div class="row afterLoginDisplay">
                <div class="col-md-12 d-flex align-items-center">
                    
                    <span style="text-transform: capitalize; ">
                        

                                <span class="text-white breadcrumbs">
                                    <a href="index" style="color:white;text-decoration:none">
                                        <i class="fa fa-home font-18"></i>
                                    </a>
                                    <i class="fa fa-chevron-right"></i> <span class="breadcrumbtext">FREQUENTLY ASKED QUESTIONS</span>
                                </span>

                    </span>



                </div>
            </div>
        </div>
    </div>
	<div class="ds-head-body">
            

<style>
    .anytime-faq-container {
        overflow-x: auto;
    }
    .faqsection ul {
        flex-wrap: nowrap;
        border-bottom:1px solid #f7848f;
    }
        .faqsection ul button {
            background: none !important;
            color: #616161;
            border: none;
            font-size: 16px;
            font-weight: 400;
            padding: 10px;
            position: relative;
            width: 220px;
            margin:0 30px;
            white-space:nowrap;
        }
    .faqsection ul button:active,.faqsection ul button:focus,.faqsection ul button:focus-visible{
        border:none !important;
        outline:none !important;
        box-shadow:none !important;
    }
    .faqsection .nav-pills .nav-link.active, .faqsection .nav-pills .show > .nav-link {
        color: #EE4E5E;
        font-weight: 500;
    }
        .faqsection .nav-pills .nav-link.active::after {
            content: "";
            width: 100%;
            height: 5px;
            position: absolute;
            bottom: -3px;
            left: 0;
            z-index: 2;
            background: #EE4E5E;
            border-radius:3px;
        }
        @media(max-width:1199px)
        {
            .faqsection ul button {
                width: 200px;
                margin: 0 10px;
            }
        }
        @media(max-width:991px) {
            .faqsection ul button {
            
                margin: 0;
            }
            .faqsection ul{
                justify-content:left !important
            }
        }
        @media(max-width:767px) {
            .faqsection ul button {
                width: 160px;
                font-size: 14px;
            }
        }
</style>
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-5 text-justify">
            <h2 class="h2 font-weight-bold colorblack mb-4 cat-heading">Frequently Asked Questions</h2>
            <div class="panel-group faqsection" id="accordion">
                <div class="d-block bg-white p-4 content-para">
                    <div class="tab-content mt-4" id="faqpills-tabContent">
                        <div class="tab-pane fade show active" id="anytime-consulting-astrologers" role="tabpanel" aria-labelledby="anytime-consulting-astrologers-tab">


                            <div class="panel panel-default mb-3">
                                <div class="panel-heading">
                                    <h3 class="panel-title mb-0">
                                        <a class="accordion-toggle font-weight-bold d-block py-2" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                            I  want to chat with an Astrologer. How do I start?
                                        </a>
                                    </h3>
                                </div>
                                <div id="collapseOne" class="panel-collapse show" data-parent="#accordion">
                                    <div class="panel-body px-3 py-4 border-top">
                                        In order to chat with an Astrologer, all you need to do is login to your <?php echo $title;?> account or sign up to create an account and then simply choose the Astrologer you want to chat with and begin your session.
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default mb-3">
                                <div class="panel-heading">
                                    <h3 class="panel-title mb-0">
                                        <a class="accordion-toggle collapsed font-weight-bold d-block py-2" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                            Is there any requirement of minimum balance before I begin consulting an Astrologer?

                                        </a>
                                    </h3>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse" data-parent="#accordion">
                                    <div class="panel-body px-3 py-4 border-top">
                                        Yes, in order to begin your chat or call session with an Astrologer, you need to have a minimum balance of 5 minutes, as per the Astrologer’s per minute charge, in your <?php echo $title;?> account.

                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default mb-3">
                                <div class="panel-heading">
                                    <h3 class="panel-title mb-0">
                                        <a class="accordion-toggle collapsed font-weight-bold d-block py-2" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                            Are the Astrologers verified?

                                        </a>
                                    </h3>
                                </div>
                                <div id="collapseThree" class="panel-collapse collapse" data-parent="#accordion">
                                    <div class="panel-body px-3 py-4 border-top">
                                        Yes, all the Astrologers associated with <?php echo $title;?> are verified and certified. We follow a stringent process to determine the genuinity and the expertise of the Astrologers. Every Astrologer at <?php echo $title;?> is expert in their particular domain and holds required experience.

                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default mb-3">
                                <div class="panel-heading">
                                    <h3 class="panel-title mb-0">
                                        <a class="accordion-toggle collapsed font-weight-bold d-block py-2" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                                            If I get a phone call in between a chat, will it automatically end my session?

                                        </a>
                                    </h3>
                                </div>
                                <div id="collapseFour" class="panel-collapse collapse" data-parent="#accordion">
                                    <div class="panel-body px-3 py-4 border-top">
                                        No, a phone call or any message on your phone in between a chat will not end your session or will not quit the application. You will have to click on the ‘End Chat’ button for the session to end.

                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default mb-3">
                                <div class="panel-heading">
                                    <h3 class="panel-title mb-0">
                                        <a class="accordion-toggle collapsed font-weight-bold d-block py-2" data-toggle="collapse" data-parent="#accordion" href="#collapseFive">
                                            What if the Astrologer of my choice is not available online?
                                        </a>
                                    </h3>
                                </div>
                                <div id="collapseFive" class="panel-collapse collapse" data-parent="#accordion">
                                    <div class="panel-body px-3 py-4 border-top">
                                        If the Astrologer of your choice is not online, then you can simply send them a message and they will reply as and when they are available. You can go to their profile, click on ‘Send Message’ and just type and send.

                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default mb-3">
                                <div class="panel-heading">
                                    <h3 class="panel-title mb-0">
                                        <a class="accordion-toggle collapsed font-weight-bold d-block py-2" data-toggle="collapse" data-parent="#accordion" href="#collapseSix">
                                            How do I make payment for a session?

                                        </a>
                                    </h3>
                                </div>
                                <div id="collapseSix" class="panel-collapse collapse" data-parent="#accordion">
                                    <div class="panel-body px-3 py-4 border-top">
                                        For your convenience, we have created your own <?php echo $title;?> wallet in which you have to add money through the payment modes available. Payment for each session will be debited from your wallet and you will be notified to add money whenever the amount in your wallet is low for a session.

                                    </div>
                                </div>
                            </div>


                            <div class="panel panel-default mb-3">
                                <div class="panel-heading">
                                    <h3 class="panel-title mb-0">
                                        <a class="accordion-toggle collapsed font-weight-bold d-block py-2" data-toggle="collapse" data-parent="#accordion" href="#collapse8">
                                            Can I see my chat/call history?


                                        </a>
                                    </h3>
                                </div>
                                <div id="collapse8" class="panel-collapse collapse" data-parent="#accordion">
                                    <div class="panel-body px-3 py-4 border-top">
                                        Yes, you can check your chat or call history :
                                        <ul>
                                            <li>
                                                Click on your profile in the top right corner.
                                            </li>
                                            <li>
                                                Go to ‘My Account Settings’

                                            </li>
                                            <li>
                                                Choose from ‘My Chats’ or ‘My Calls’ as per your preference and you can take a look at your session history and other relevant details.
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default mb-3">
                                <div class="panel-heading">
                                    <h3 class="panel-title mb-0">
                                        <a class="accordion-toggle collapsed font-weight-bold d-block py-2" data-toggle="collapse" data-parent="#accordion" href="#collapse9">
                                            Will my privacy and anonymity be maintained?


                                        </a>
                                    </h3>
                                </div>
                                <div id="collapse9" class="panel-collapse collapse" data-parent="#accordion">
                                    <div class="panel-body px-3 py-4 border-top">
                                        <?php echo $title;?> respects your privacy and this is why we ensure that your security is not compromised. We take stringent security measures to maintain your information and identity confidential.

                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default mb-3">
                                <div class="panel-heading">
                                    <h3 class="panel-title mb-0">
                                        <a class="accordion-toggle collapsed font-weight-bold d-block py-2" data-toggle="collapse" data-parent="#accordion" href="#collapseten">
                                            What should I do if I face issues during a chat or call session with an Astrologer?


                                        </a>
                                    </h3>
                                </div>
                                <div id="collapseten" class="panel-collapse collapse" data-parent="#accordion">
                                    <div class="panel-body px-3 py-4 border-top">
                                        If you face problems during or after your session and need assistance, you can always reach out to us at : <a href="mailto:<?php echo $email;?>" class="colorbrownlight"><?php echo $email;?></a>

                                    </div>
                                </div>
                            </div>
                        
                    </div>
                    <div class="tab-pane fade " id="anytime-online-store" role="tabpanel" aria-labelledby="anytime-online-store-tab">
                       

                           
                            <div class="panel panel-default mb-3" id="gemstone-faqs">
                                <div class="panel-heading">
                                    <h3 class="panel-title mb-0">
                                        <a class="accordion-toggle collapsed font-weight-bold d-block py-2" data-toggle="collapse" data-parent="#accordion" href="#collapsegem1">
                                            How do I purchase gemstones from <?php echo $title;?>?
                                        </a>
                                    </h3>
                                </div>
                                <div id="collapsegem1" class="panel-collapse collapse" data-parent="#accordion">
                                    <div class="panel-body px-3 py-4 border-top">
                                        You can explore our gemstone collection on the website or app, select your desired stone, and proceed to checkout for a seamless purchase experience.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default mb-3">
                                <div class="panel-heading">
                                    <h3 class="panel-title mb-0">
                                        <a class="accordion-toggle collapsed font-weight-bold d-block py-2" data-toggle="collapse" data-parent="#accordion" href="#collapsegem2">
                                            Are the gemstones sold by <?php echo $title;?> authentic?
                                        </a>
                                    </h3>
                                </div>
                                <div id="collapsegem2" class="panel-collapse collapse" data-parent="#accordion">
                                    <div class="panel-body px-3 py-4 border-top">
                                        Yes, all our gemstones are certified and carefully verified for authenticity to ensure their quality and effectiveness.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default mb-3">
                                <div class="panel-heading">
                                    <h3 class="panel-title mb-0">
                                        <a class="accordion-toggle collapsed font-weight-bold d-block py-2" data-toggle="collapse" data-parent="#accordion" href="#collapsegem3">
                                            Do the gemstones come pre-energized?
                                        </a>
                                    </h3>
                                </div>
                                <div id="collapsegem3" class="panel-collapse collapse" data-parent="#accordion">
                                    <div class="panel-body px-3 py-4 border-top">
                                        Absolutely! Each gemstone is energized following authentic Vedic rituals, performed by experts with complete dedication.

                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default mb-3">
                                <div class="panel-heading">
                                    <h3 class="panel-title mb-0">
                                        <a class="accordion-toggle collapsed font-weight-bold d-block py-2" data-toggle="collapse" data-parent="#accordion" href="#collapsegem4">
                                            How can I check which gemstone suits me?
                                        </a>
                                    </h3>
                                </div>
                                <div id="collapsegem4" class="panel-collapse collapse" data-parent="#accordion">
                                    <div class="panel-body px-3 py-4 border-top">
                                        You can consult with our Astrologers, who will analyze your birth chart and recommend the best gemstone for you.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default mb-3">
                                <div class="panel-heading">
                                    <h3 class="panel-title mb-0">
                                        <a class="accordion-toggle collapsed font-weight-bold d-block py-2" data-toggle="collapse" data-parent="#accordion" href="#collapsegem5">
                                            Can I return or exchange a gemstone if it doesn’t suit me?
                                        </a>
                                    </h3>
                                </div>
                                <div id="collapsegem5" class="panel-collapse collapse" data-parent="#accordion">
                                    <div class="panel-body px-3 py-4 border-top">
                                        We offer a flexible return and exchange policy. Please refer to our terms and conditions for detailed information.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default mb-3">
                                <div class="panel-heading">
                                    <h3 class="panel-title mb-0">
                                        <a class="accordion-toggle collapsed font-weight-bold d-block py-2" data-toggle="collapse" data-parent="#accordion" href="#collapsegem6">
                                            How do I know if a gemstone is suitable for my astrological needs?
                                        </a>
                                    </h3>
                                </div>
                                <div id="collapsegem6" class="panel-collapse collapse" data-parent="#accordion">
                                    <div class="panel-body px-3 py-4 border-top">
                                        Our Astrologers will guide you in selecting the right gemstone based on your unique Astrological chart and requirements.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default mb-3">
                                <div class="panel-heading">
                                    <h3 class="panel-title mb-0">
                                        <a class="accordion-toggle collapsed font-weight-bold d-block py-2" data-toggle="collapse" data-parent="#accordion" href="#collapsegem7">
                                            Are gemstones delivered to my location?

                                        </a>
                                    </h3>
                                </div>
                                <div id="collapsegem7" class="panel-collapse collapse" data-parent="#accordion">
                                    <div class="panel-body px-3 py-4 border-top">
                                        Yes, we provide secure and reliable shipping across various locations to ensure your gemstone reaches you safely.

                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default mb-3">
                                <div class="panel-heading">
                                    <h3 class="panel-title mb-0">
                                        <a class="accordion-toggle collapsed font-weight-bold d-block py-2" data-toggle="collapse" data-parent="#accordion" href="#collapsegem8">
                                            How can I track my gemstone order?

                                        </a>
                                    </h3>
                                </div>
                                <div id="collapsegem8" class="panel-collapse collapse" data-parent="#accordion">
                                    <div class="panel-body px-3 py-4 border-top">
                                        You can track your order through your account on the website or app. Updates will also be sent to your registered email or phone number.

                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default mb-3">
                                <div class="panel-heading">
                                    <h3 class="panel-title mb-0">
                                        <a class="accordion-toggle collapsed font-weight-bold d-block py-2" data-toggle="collapse" data-parent="#accordion" href="#collapsegem9">
                                            Will the gemstone come with a certificate of authenticity?

                                        </a>
                                    </h3>
                                </div>
                                <div id="collapsegem9" class="panel-collapse collapse" data-parent="#accordion">
                                    <div class="panel-body px-3 py-4 border-top">
                                        Yes, every gemstone is accompanied by a certificate of authenticity, verifying its quality and origin.

                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default mb-3">
                                <div class="panel-heading">
                                    <h3 class="panel-title mb-0">
                                        <a class="accordion-toggle collapsed font-weight-bold d-block py-2" data-toggle="collapse" data-parent="#accordion" href="#collapsegem10">
                                            What should I do if I face issues with my gemstone order?

                                        </a>
                                    </h3>
                                </div>
                                <div id="collapsegem10" class="panel-collapse collapse" data-parent="#accordion">
                                    <div class="panel-body px-3 py-4 border-top">
                                        If you encounter any issues, our customer support team is always available to assist you. Reach out to us via email or the help section in the app.

                                    </div>
                                </div>
                            </div>
                     
                    </div>
                    <div class="tab-pane fade " id="anytime-online-puja" role="tabpanel" aria-labelledby="anytime-online-puja-tab">
                        Online Puja
                    </div>
                </div>
            </div>



            </div>

        </div>
            <script type="text/javascript">
                gShowExitNeg = false;
            </script>
        </div>
    </div>

        </div>
    <?php include('footer.php');?>
<?php
/*
Template Name: How it Works
*/
?>

<div class="page-header-bg">
	<div class="container">
        <h1>
        	<?php echo roots_title(); ?>
        </h1>
    </div>
</div>

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/sd-css/feature.css" type="text/css" media="all" />

<!-- Content Menu -->
<div id="feature-menu-anchor"></div> 
<div id="feature-menu" class="feature-menu">
    <div class="container">
    
        <ul id="content-menu">
            <li class="cm active" data-slide="meet">
                <p><strong>Meet SherpaDesk</strong><br /><span>Say Hello To Your Guide</span></p>
            </li>
            <li class="cm" data-slide="speedy">
                <p><strong>Speedy Ascent</strong><br /><span>Start up Quickly</span></p>
            </li>
            <li class="cm" data-slide="b2b2b">
                <p><strong>B2B2B</strong><br /><span>Built for B2B Business</span></p>
            </li>
            <li class="cm" data-slide="play">
                <p><strong>Play Together</strong><br /><span>Key Integrations</span></p>
            </li>
            <li class="cm start">
                <a href="http://sherpadesk.com/start-your-climb"><p><strong>Get Started!</strong></p></a>
            </li>
        </ul>
    </div><!-- End Content Menu -->
</div>



<!-- Main Content Slide -->

<div class="container">

<div id="meet" class="slide active" rel="1">                        
    <div class="row">
        <div class="col-md-6">
            <h2>Ticket Management</h2>
            <h3>Keep your team organized and on the right path.</h3>
            <p>Receive, route, respond and report client support requests with our complete ticket management system. Dynamic forms allow you to ask specific questions and gather better information relating to the end user's needs.  Customers are able to send tickets either by email, a custom web portal or via the SherpaDesk mobile app.</p>
        </div>
        <div class="col-md-6"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/sdimages/howitworks/ticket_list.png"></div>
    </div>
 
    
    <div class="row">
        <div class="col-md-6"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/sdimages/howitworks/project_detail.png"></div>
        <div class="col-md-6">
            <h2>Projects</h2>
            <h3>PM tools to help you plan for success.</h3>
            <p>Start a new internal project or create one for your clients.  Establish baselines for estimated number of hours it will take to complete the project and expected costs.  Assign tickets and ToDo items to each project to see the total magnitude of work completed and how close you are to your initial estimations.</p>
        </div>
    </div>
                    
    <div class="row">
        <div class="col-md-6">
            <h2>Assets</h2>
            <h3>Know your company's or your client's inventory.</h3>
            <p>Asset Manager allows you to maintain a database of all your internal hardware or client's assets.  Track and report on each asset profile, review support history of each asset, and maintain an audit trail of the asset's life-cycle.</p>
        </div>
        <div class="col-md-6"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/sdimages/howitworks/location_assets.png"></div>
    </div>
</div>


<!------- Speedy Ascent Panel ------->
<div id="speedy" class="slide">
      <div class="row">
       <div class="col-md-6">
            <h2>Simple Sign On/Setup</h2>
            <h3>Reduce your 'Go' time with easy self setup.</h3>
            <p>Click on the 'Start Your Climb' button now, choose the setup that best describes you and start receiving tickets.  If you are just a single tech with limited needs then go ahead and use the application for free as long as you want.  It's on us!</p>
        </div>
        <div class="col-md-6"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/sdimages/howitworks/setup.png"></div>
    </div>
    <div class="row">
        <div class="col-md-6"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/sdimages/howitworks/emailparse.png"></div>
        <div class="col-md-6">
            <h2>Email Parsing</h2>
            <h3>Create, Communicate and Update.</h3>
            <p>The email parser allows you to create and update ticket information over email.  This helps reduce the amount of friction caused by always having to log in to an application.  Record time, transfer ticket or respond to the user by just replying to the email.  All information will be updated within the ticket details. <a href="http://sherpadesk.com/email-integration/"> >>Learn More</a></p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <h2>Support Portal</h2>
            <h3>Your very own Support Window to the World.</h3>
            <p>Create a customized branded portal to give your customers' access to existing Knowledgebase and Q&A articles to help resolve their issues.  If there isn't a related article then they can send in a support request to be resolved by a member of the team.</p>
        </div>
        <div class="col-md-6"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/sdimages/howitworks/support_portal.png"></div>
    </div>
</div>

<!------- B2B2B Panel ------->
<div id="b2b2b" class="slide">
  
     <div class="row">
        <div class="col-md-6">
            <h2>Account Management</h2>
            <h3>Know your Clients? Get insight.</h3>
            <p>The Account Manager offers a lightweight CRM solution to track your customer's request. Within each account profile, you can track open tickets, custom data tracking fields, assign user accounts, create multiple locations, attach files, review projects and add notes.</p>
        </div>
        <div class="col-md-6"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/sdimages/howitworks/account_detail.png"></div>
    </div>
  
    <div class="row">
        <div class="col-md-6"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/sdimages/howitworks/time_home.png"></div>
        <div class="col-md-6">
            <h2>Time and Billing</h2>
            <h3>Flexible rate plans allow for custom billing.</h3>
            <p>Time and Billing helps manage billable time for customers and track hours to pay staff. Each client or project can have its own unique rate plan or billing plan.  SherpaDesk tracks the hours assigned to each client and compiles the hours that need to be billed to the customer or paid out to a contractor or technician.</p>
        </div>
    </div>
   
    <div class="row">
        <div class="col-md-6">
            <h2>Remote Assistance</h2>
            <h3>Hey, let me show you something.</h3>
            <p>When communicating over phone or email just doesn't convey the message it is best to demonstrate to the user what needs to be done.  SherpaDesk's integrated chat and remote desktop control allows techs to manage a computer remotely or display their desktop to the user.</p>
        </div>
        <div class="col-md-6"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/sdimages/howitworks/remote_assist.png"></div>
    </div>
   
</div>

<div id="play" class="slide">
     <div class="row">
        <div class="col-md-6">
            <h2>Accounting Integration</h2>
            <h3>Count all your beans in one place</h3>
            <p>SherpaDesk for QuickBooks and Freshbooks helps you to synchronize customer data between these solutions and SherpaDesk. By transferring customer invoicing and staff payment data, you can maintain complete and up-to-date information about what is owed from your customers and what you owe your employees. With the QuickBooks Integration, you can import, export or synchronize data helping to reduce duplicate data entry</p>
        </div>
        <div class="col-md-6"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/sdimages/howitworks/ticket_integration.png"></div>
    </div>
  

    <div class="row">
        <div class="col-md-6"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/sdimages/howitworks/ticket_api.png"></div>
        <div class="col-md-6">
            <h2>API Access</h2>
            <h3>Open SherpaDesk access for all.</h3>
            <p>SherpaDesk  APIs are  available to our community for developers who want to discover, engage and communicate using the data created in our platform.   We encourage developers to sign up for access and get to coding! Please check back often, as we intend to continue expanding available API's across the platform.</p>
        </div>
    </div>

   <div class="row">
        <div class="col-md-6">
            <h2>Data Export</h2>
            <h3>It's your data. Use it.</h3>
            <p>SherpaDesk provides extensive reporting capabilities with standard built-in reports as well as a custom report designer allowing you to build unique reports for your organization.  If the reporting capabilities you need are not available then you are able to export your data in either an XML, CSV, or XLS format to run your own reports from a local solution.</p>
        </div>
        <div class="col-md-6"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/sdimages/howitworks/data_export.png"></div>
    </div>
</div>
              
</div>

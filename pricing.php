<?php
/*
Template Name: Pricing
*/
?>

<link rel="stylesheet" type="text/css" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/sd-css/sd-pricing.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/sd-css/tipsy.css">

<div class="container main-content">
	<!-- Pricing Tables --> 
	<div class="row">
		<div class="pricing-table four-cols">
				<div class="pricing-column ">
                    <h3>FREE</h3>
                    <div class="pricing-column-content">
                        <h4> <span class="dollar-sign">$</span> 0 </h4>
                        <span class="interval">Per Month</span>
                        <ul class="features" style="height: 165px;">
                        	<li><strong>1</strong> Technician</li>
                            <li><strong>3</strong> Accounts</li>
                            <li><strong>3</strong> Projects</li>
                            <li><strong>+ A Little of Everything</strong></li>
                        </ul>                        
                        <a id="plan1" class="btn btn-primary btn-lg" href="#calculate">Tweak This Plan</a>
                    </div>
            	</div>
				<div class="pricing-column">
                    <h3>Stone Mountain</h3>
                    <div class="pricing-column-content">
                        <h4> <span class="dollar-sign">$</span> 30 </h4>
                        <span class="interval">Per Month</span>
                        <ul class="features" style="height: 165px;">
                            <li><strong>2</strong> Technicians</li>
                            <li><strong>3</strong> Accounts</li>
                            <li>Invoice &amp; Payments <strong>ON</strong></li>
                            <li><strong>+ A Little More</strong></li>
                        </ul>
                        <a id="plan2" class="btn btn-primary btn-lg" href="#calculate">Tweak This Plan</a>
                    </div>
            	</div>
				<div class="pricing-column highlight">
                    <h3>Mt. Fuji<span class="highlight-reason">Most Popular</span></h3>
                    <div class="pricing-column-content">
	                    <h4> <span class="dollar-sign">$</span> 60 </h4>
	                    <span class="interval">Per Month</span>
	                    <ul class="features" style="height: 165px;">
		                    <li><strong>3</strong> Technicians</li>
                            <li><strong>12</strong> Accounts</li>
                            <li>Remote Assistance <strong>ON</strong></li>
                            <li><strong>+ A Lot More</strong></li>
	                    </ul>
						<a id="plan3" class="btn btn-primary btn-lg" href="#calculate">Tweak This Plan</a>
					</div>
            	</div>
				<div class="pricing-column ">
					<h3>Everest</h3>
					<div class="pricing-column-content">
						<h4> <span class="dollar-sign">$</span> 96 </h4>
						<span class="interval">Per Month</span>
						<ul class="features" style="height: 165px;">
							<li><strong>5</strong> Technicians</li>
                            <li><strong>30</strong> Accounts</li>
                            <li>Active Directory <strong>ON</strong></li>
                            <li><strong>+ The Kitchen Sink</strong></li>
						</ul>
                        <a id="movetototal"></a><!-- Scroll to here on all select buttons -->
                        <a id="calculate"></a><!-- Scroll to here on all select buttons --> 
                        <a id="features"></a><!-- Scroll to here on all select buttons --> 
						<a id="plan4" class="btn btn-primary btn-lg" href="#calculate">Tweak This Plan</a>
					</div>                    
				</div>
			</div>
	</div><!--/row-->
    <!-- End Pricing Tables --> 

    <!-- Start Price Bar --> 
    <div class="price-bar-row" style="display:none;">
    	<div class="rightsidepricing">
        	<p>Estimated Pricing  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sdimages/question.png" width="14" height="14" title="All plans are based on our utility pricing structure, so based on the amount you use, your price could be adjusted up or down."></p>
            <h1><span class="price-sign">$</span><span class="price-number">0.00</span></h1>
            <p><strong>per month</strong></p>
        </div>
        <div class="leftsidebuttons">
        	<a href="#calculate" class="calc">Customize This Plan</a> <a href="#features" class="showfeatures">Full Feature List</a>
        </div>    
    </div>
	<!-- End Price Bar -->
    
    <!-- Start Get Started Button -->    
    <div class="row">
    	<a href="http://sherpadesk.com/start-your-climb/" class="getstarted">Start Supporting My Clients</a>
    </div>
    <!-- End Get Started Button -->
    
    <!----------------------------------------------------------------------------------------------------
  ----------------------------------------------------------------------------------------------------
                                          Start Calculator 
  ----------------------------------------------------------------------------------------------------
  --------------------------------------------------------------------------------------------------->
  
    <div class="row calculator-wrap" style="display:none;">
    	<h2>Customize Your Plan</h2>
    	<div class="col-md-8 calc-left">
        	<h3 class="calc-header">Variable Options</h3>
            
            <!-- Technicians -->
            <div class="var-option">
            	<p>Technicians <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sdimages/question.png" width="18" height="18" title="Your First Tech is Always Free!  Only $9.95 / month for each additional Tech."></p> 
                <div class="calc-slider-wrap">              
	            	<div id="technicians" class="slidermain"></div>
                </div> 
                <div class="calc-var-info">
                	<h1 id="technicians_count" class="count">1</h1>
                    <p>$<span id="technicians_amount" class="amount">0</span> / mo</p>
                </div>
            </div>
            
            <!-- Assets -->
            <div class="var-option">
            	<p>Assets <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sdimages/question.png" width="18" height="18" title="First 25 Assets tracked for Free!  Only $0.05 per month for each additional asset tracked."></p> 
                <div class="calc-slider-wrap">              
	            	<div id="assets" class="slidermain"></div>
                </div> 
                <div class="calc-var-info">
                	<h1 id="assets_count" class="count">1</h1>
                    <p>$<span id="assets_amount" class="amount">0</span> / mo</p>
                </div>
            </div>
            
            <!-- Locations -->
            <div class="var-option">
            	<p>Locations <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sdimages/question.png" width="18" height="18" title="First 4 Locations are Free! Only $0.25 per month for each additional location."></p> 
                <div class="calc-slider-wrap">              
	            	<div id="locations" class="slidermain"></div>
                </div> 
                <div class="calc-var-info">
                	<h1 id="locations_count" class="count">1</h1>
                    <p>$<span id="locations_amount" class="amount">0</span> / mo</p>
                </div>
            </div>
            
            <!-- Accounts -->
            <div class="var-option">
            	<p>Accounts <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sdimages/question.png" width="18" height="18" title="First 3 Accounts are Free! Only $0.20 per month for each addition Account"></p> 
                <div class="calc-slider-wrap">              
	            	<div id="accounts" class="slidermain"></div>
                </div> 
                <div class="calc-var-info">
                	<h1 id="accounts_count" class="count">1</h1>
                    <p>$<span id="accounts_amount" class="amount">0</span> / mo</p>
                </div>
            </div>
            
            <!-- KB -->
            <div class="var-option">
            	<p>KB Articles <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sdimages/question.png" width="18" height="18" title="First 10 KB Articles are Free!  Only $0.05 per month for each additional KB article."></p> 
                <div class="calc-slider-wrap">              
	            	<div id="kb" class="slidermain"></div>
                </div> 
                <div class="calc-var-info">
                	<h1 id="kb_count" class="count">1</h1>
                    <p>$<span id="kb_amount" class="amount">0</span> / mo</p>
                </div>
            </div>
            
           <!-- Projects -->
            <div class="var-option">
            	<p>Projects <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sdimages/question.png" width="18" height="18" title="First 3 Projects are Free!  Only $0.50 per month for each additional Project."></p> 
                <div class="calc-slider-wrap">              
	            	<div id="projects" class="slidermain"></div>
                </div> 
                <div class="calc-var-info">
                	<h1 id="projects_count" class="count">1</h1>
                    <p>$<span id="projects_amount" class="amount">0</span> / mo</p>
               </div>
            </div>
            
            
            <!-- storage -->
            <div class="var-option">
            	<p>Data Storage <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sdimages/question.png" width="18" height="18" title="1gb of storage is Always Free!  Only $1.00 per month for each additional 1gb used."></p> 
                <div class="calc-slider-wrap">              
	            	<div id="storage" class="slidermain"></div>
                </div> 
                <div class="calc-var-info">
                	<h1 id="storage_count" class="count">1gb</h1>
                    <p>$<span id="storage_amount" class="amount">0</span> / mo</p>
                </div>
            </div>
        </div>
        
        
        <!-- Right Side of Calculator -->
    	<div class="col-md-4 col_last calc-right">
         	<h3 class="calc-header">Static Options</h3> 
            
            <!-- Active Directory -->
            <div class="static-option">
            	<p>Active Directory <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sdimages/question.png" width="18" height="18" title="Active Directory is only $2.00 per Technician per Month."></p>               
                <div class="calc-var-info">
                    <p>$<span id="ad_amount" class="amount">0</span>/mo</p>
                </div>                
                <div id="ad_on" class="on-off off"></div>                 
            </div>
            
            <!-- Asset Auditor -->
            <div class="static-option">
            	<p>Asset Auditor <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sdimages/question.png" width="18" height="18" title="Asset Auditor is only $0.25 per Location per Month"></p>               
                <div class="calc-var-info">
                    <p>$<span id="auditor_amount" class="amount">0</span>/mo</p>
                </div>                
                <div id="auditor_on" class="on-off on"></div>               
            </div>
            
            <!-- HTTP/SSL -->
            <div class="static-option">
            	<p>HTTP/SSL <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sdimages/question.png" width="18" height="18" title="Add HTTP/SSL security for only $10.00 per month."></p>                
                <div class="calc-var-info">
                    <p>$<span id="ssl_amount" class="amount">0</span>/mo</p>
                </div>                
                <div id="ssl_on" class="on-off off"></div>                  
            </div>
            
            <!-- Invoices -->
            <div class="static-option">
            	<p>Invoices & Payments <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sdimages/question.png" width="18" height="18" title="Add Invoices &amp; Payments for only $20 per month."></p>               
                <div class="calc-var-info">
                    <p>$<span id="invoices_amount" class="amount">0</span>/mo</p>
                </div>                
                <div id="invoices_on" class="on-off off"></div>                   
            </div>
            
            <!-- Remote Assistance -->
            <div class="static-option">
            	<p>Remote Assistance <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sdimages/question.png" width="18" height="18" title="Add Remote Assistance for $2.00 per Technician per month."></p>               
                <div class="calc-var-info">
                    <p>$<span id="ra_amount" class="amount">0</span>/mo</p>
                </div>                
                <div id="ra_on" class="on-off off"></div>                   
            </div>                     
        </div>
        <div class="mobile-only">
        	 <!-- Start Price Bar --> 
		    <div class="row price-bar-row" style="display:none;">
		    	<div class="rightsidepricing">
		        	<p>Estimated Pricing  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sdimages/question.png" width="14" height="14" title="All plans are based on our utility pricing structure, so based on the amount you use, your price could be adjusted up or down."></p>
	            <h1><span class="price-sign">$</span><span class="price-number">0.00</span></h1>
		            <h3>per month</h3>
		        </div>
		        <div class="leftsidebuttons">
		        	<a href="#calculate" class="calc">Customize This Plan</a> <a href="#features" class="showfeatures">Full Feature List</a>
		        </div>    
		    </div>
			<!-- End Price Bar -->
		    
		    <!-- Start Get Started Button -->
		    <div class="row">
		    	<a href="http://sherpadesk.com/start-your-climb/" class="getstarted">Get Started Now</a>
		    </div> 
		    <!-- End Get Started Button -->
        </div>
    </div>
    
    
<!----------------------------------------------------------------------------------------------------
  ----------------------------------------------------------------------------------------------------
                                          Start Features 
  ----------------------------------------------------------------------------------------------------
  --------------------------------------------------------------------------------------------------->
	<div class="row" id="pricing-table" style="display: none;" >
    	<table class="pricing-details clearfix" width="100%" cellpadding="0" cellspacing="0">
            <tbody>
                <tr>
                    <td colspan="2">
                        <h3 class="top-heading">Customer Support</h3>
                    </td>
                </tr>
                <tr>
                    <td class="title">Email Support</td>
                    <td class="description">24x7</td>
                </tr>
                <tr>
                    <td class="title">Phone Support</td>
                    <td class="description">8AM - 6PM Mon - Fri</td>
                </tr>
                
                <tr>
                    <td colspan="2">
                        <h3>Tickets Management</h3>
                    </td>
                </tr>
                <tr>
                    <td class="title">Business Rules Routing</td>
                    <td class="description">Workflow  and ticket assignment can be determine by the type of problems your user is having, the organization of the user, the severity level of the request or mixture of these events.</td>
                </tr>
                <tr>
                    <td class="title">Rich Text and Multimedia Support in Tickets</td>
                    <td class="description">The email parser support rich text formatting allow all images to be stored in line within the ticket history</td>
                </tr>
                <tr>
                    <td class="title">Custom Fields</td>
                    <td class="description">Add custom fields to the ticket form to further clarify the request</td>
                </tr>
                <tr>
                    <td class="title">Advanced Search</td>
                    <td class="description">All content is queried and available for search</td>
                </tr>
                <tr>
                    <td class="title">On-hold ticket status</td>
                    <td class="description">Place tickets in an 'On-Hold' status for later resolution </td>
                </tr>
                <tr>
                    <td class="title">Business Hours</td>
                    <td class="description">Add  business hours and holidays to work in relations with your SLAs</td>
                </tr>
                <tr>
                    <td class="title">Signature Block for Printed Tickets</td>
                    <td class="description">Add a signature block to printed tickets</td>
                </tr>
                <tr>
                    <td class="title">Scheduled Date</td>
                    <td class="description">Allow end user the ability to request a date of service</td>
                </tr>
                <tr>
                    <td class="title">Related Ticketing</td>
                    <td class="description">Create ticket relationships using Master, Sub and Related ticket associations</td>
                </tr>
                <tr>
                    <td class="title">Submission Category</td>
                    <td class="description">Track how tickets are created (i.e. phone, email, remote chat, etc.)</td>
                </tr>
                <tr>
                    <td class="title">Creation Category</td>
                    <td class="description">Track why tickets are created (i.e. warranty, vandalism, user error, etc.)</td>
                </tr>
                <tr>
                    <td class="title">Folders</td>
                    <td class="description">Store and retrieve tickets using a folder tree system </td>
                </tr>
                <tr>
                    <td class="title">Accounts</td>
                    <td class="description">Manage your customer's tickets, projects, users, locations, and assets with the Account Manager feature</td>
                </tr>
                <tr>
                    <td class="title">ToDo's</td>
                    <td class="description">Assign simple tasks and due dates within a ticket or project</td>
                </tr>
                <tr>
                    <td class="title">Levels and Escalations</td>
                    <td class="description">Create a ticket workflow that moves tickets through and tiered support process when a ticket is escalated/de-escalated</td>
                </tr>
                <tr>
                    <td class="title">Priorities and SLAs</td>
                    <td class="description">Create a service level agreement for ticket response and completion times</td>
                </tr>

               <tr>
                    <td class="title">Scheduled Maintenance</td>
                    <td class="description">Set up a recurring schedule that auto generates and assign new tickets</td>
                </tr>
                <tr>
                    <td class="title">Unassigned Queues</td>
                    <td class="description">A group of technician that can be assigned to receive new support requests</td>
                </tr>
                <tr>
                    <td class="title">Remote Assistance</td>
                    <td class="description">Initiate a remote  session and chat where you can share desktops</td>
                </tr>
                <tr>
                    <td class="title">Notification Manager</td>
                    <td class="description">Set up  multiple notification rules based on ticket criteria and events</td>
                </tr>
                <tr>
                    <td colspan="2">
                        <h3>Time Tracking and Invoicing</h3>
                    </td>
                </tr>
                <tr>
                    <td class="title">Create Multiple Rate Types</td>
                    <td class="description">Create multiple tasks types for reporting, billing and invoicing</td>
                </tr>
                <tr>
                    <td class="title">Create Multiple Rate Plans</td>
                    <td class="description">Plans consist of various task types with differing cost of service</td>
                </tr>
                <tr>
                    <td class="title">Create Bills to pay Staff</td>
                    <td class="description">Bills allow you to pay your internal staff for service</td>
                </tr>
                <tr>
                    <td class="title">Create Invoices for Clients</td>
                    <td class="description">Invoices allow you to send your customers the cost of service</td>
                </tr>
                <tr>
                    <td class="title">Account Level Billing</td>
                    <td class="description">Each account is able to be assigned it's own unique billing plan</td>
                </tr>
                <tr>
                    <td class="title">Remaining Time</td>
                    <td class="description">Each ticket is able to be measured with how much time is left for completion</td>
                </tr>
                <tr>
                    <td class="title">Start/Stop Clock</td>
                    <td class="description">A stopwatch feature that allows you to record your time</td>
                </tr>
                <tr>
                    <td colspan="2">
                        <h3>Email Parsing</h3>
                    </td>
                </tr>
                <tr>
                    <td class="title">Allow new user creation via email parser</td>
                    <td class="description">New users are added to your system by simply sending in an email</td>
                </tr>
                <tr>
                    <td class="title">Create, Update and Modify Tickets via email parsing</td>
                    <td class="description">The email parser allows technicians to modify and update tickets using special commands when replying</td>
                </tr>
                <tr>
                    <td class="title">Customize Email Information Block</td>
                    <td class="description">Specific ticket information can be made available to the end user via email</td>
                </tr>
                <tr>
                    <td class="title">Custom emails messages</td>
                    <td class="description">Create unique ticket email messages when events occur on the system</td>
                </tr>
               <tr>
                    <td class="title">Email Parser DropBox</td>
                    <td class="description">DropBox allows you to customize multiple inbound emails for ticket creation </td>
                </tr>
               <tr>
                    <td class="title">Email Diagnostics Logs</td>
                    <td class="description">A reporting tool to see what emails are coming IN and OUT of the system</td>
                </tr>
                <tr>
                    <td colspan="2">
                        <h3>Assets</h3>
                    </td>
                </tr>
                <tr>
                    <td class="title">Unique Identifiers</td>
                    <td class="description">Unique ID assigned to assets to help easily located these objects in your system</td>
                </tr>
                <tr>
                    <td class="title">Attach Assets to Tickets</td>
                    <td class="description">Assets (e.g. computers, scanners, mobile phones) can be assigned during ticket creation</td>
                </tr>    
                <tr>
                    <td class="title">Asset Statuses</td>
                    <td class="description">Track various asset statuses of all supported items</td>
                </tr>
                <tr>
                    <td class="title">Custom Asset Fields</td>
                    <td class="description">Create unique fields per asset type for reporting and management</td>
                </tr> 
                <tr>
                    <td class="title">Asset Browser</td>
                    <td class="description">Search across all inventory for specific asset criteria</td>
                </tr>
                <tr>
                    <td colspan="2">
                        <h3>Projects</h3>
                    </td>
                </tr> 
                <tr>
                    <td class="title">Project Estimates</td>
                    <td class="description">Estimate the amount of time to complete a project</td>
                </tr>
                <tr>
                    <td class="title">Project Budgets</td>
                    <td class="description">Estimate the internal cost and expected invoice amount on project</td>
                </tr>
                <tr>
                    <td class="title">Project Tracking</td>
                    <td class="description">Track the estimated completion and profitability on a project</td>
                </tr>
                <tr>
                    <td colspan="2">
                        <h3>Customer Engagement</h3>
                    </td>
                </tr> 
                <tr>
                    <td class="title">Portal</td>
                    <td class="description">Create a custom portal that has the look and feel of your website</td>
                </tr>
                <tr>
                    <td class="title">Account Portals</td>
                    <td class="description">Create individual customer portals that have the look and feel of their website</td>
                </tr>
                <tr>
                    <td class="title">Knowledgebase</td>
                    <td class="description">Create rich multimedia style articles that can be key word searchable from your portal</td>
                </tr>
                <tr>
                    <td class="title">Customer Side Access</td>
                    <td class="description">Customers have the ability to log in and check on the status of their requests</td>
                </tr>
                <tr>
                    <td colspan="2">
                        <h3>Mobile and Web</h3>
                    </td>
                </tr> 
                <tr>
                    <td class="title">HTML5 Application</td>
                    <td class="description">A full featured HTML5 app available across all mobile devices</td>
                </tr>
                <tr>
                    <td class="title">Chrome Extension</td>
                    <td class="description">A Chrome plug-in allowing quick access to your tickets from your browser</td>
                </tr>
                <tr>
                    <td colspan="2">
                        <h3>Customization</h3>
                    </td>
                </tr> 
                <tr>
                    <td class="title">Localizations, Time and Dates</td>
                    <td class="description">Set your instance to accommodate to your locate time zone</td>
                </tr>
                <tr>
                    <td class="title">After Hours Alert and Holidays</td>
                    <td class="description">Create specific messages to alert customers a ticket has been created after work hours</td>
                </tr>
                <tr>
                    <td class="title">Currency Symbol</td>
                    <td class="description">Add countries currency symbol</td>
                </tr>
                <tr>
                    <td class="title">Vanity URLs</td>
                    <td class="description">Create a specific vanity URL for your users to access your portal</td>
                </tr>
                <tr>
                    <td class="title">Custom Names</td>
                    <td class="description">Assign alternate names to areas of the system (e.g. tickets, accounts, technicians, etc.)</td>
                </tr>
                <tr>
                    <td class="title">Logos</td>
                    <td class="description">Add a custom log to be shown on all emails and portals</td>
                </tr>
                <tr>
                    <td colspan="2">
                        <h3>Reporting</h3>
                    </td>
                </tr> 
                <tr>
                    <td class="title">Standard Pre-Built Reporting</td>
                    <td class="description">Standard reporting with built in filters to review ticket data</td>
                </tr>
                <tr>
                    <td class="title">Custom Design Report</td>
                    <td class="description">Design custom reports using graphs and all ticket tables</td>
                </tr>
                <tr>
                    <td class="title">Time Log Detail Report</td>
                    <td class="description">View time log entries by team, projects, or task types</td>
                </tr>
                <tr>
                    <td class="title">View Timesheets</td>
                    <td class="description">A calendar view with the ability to filter time logs</td>
                </tr>
                <tr>
                    <td class="title">Full Ticket Data Export</td>
                    <td class="description">Export all data to either a CSV, XLS, or XML format</td>
                </tr>
                <tr>
                    <td colspan="2">
                        <h3>API & Integrations</h3>
                    </td>
                </tr>
                <tr>
                    <td class="title">LDAP Integrations</td>
                    <td class="description">Use Microsoft Active Directory to manage all user accounts</td>
                </tr>
                <tr>
                    <td class="title">API Keys</td>
                    <td class="description">REST and JavaScript API</td>
                </tr>
                <tr>
                    <td class="title">Freshbooks</td>
                    <td class="description">Integrate project time logs and calculated rates into FreshBooks</td>
                </tr>
                <tr>
                    <td class="title">QuickBooks</td>
                    <td class="description">Integrate time logs and rates into QuickBooks</td>
                </tr>
                <tr>
                    <td class="title">Google Marketplace</td>
                    <td class="description">Use Google Marketplaces to integrate into your Google Apps</td>
                </tr>
            </tbody>
        </table> 
    </div>
    
   
    
    
<!----------------------------------------------------------------------------------------------------
  ----------------------------------------------------------------------------------------------------
                                         Post from Wordpress
  ----------------------------------------------------------------------------------------------------
  --------------------------------------------------------------------------------------------------->
  
	<div class="row">
		<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
			<?php the_content(); ?>
		<?php endwhile; endif; ?>
	</div><!--/row-->

</div>

 <div class="bottom-trust">
    <div class="container">
        <h1>
            Join Over <strong>300+ Organizations</strong> who trust our solutions<br>
            to track customer issues and log hourly time
        </h1>
    </div>
</div>

<!----------------------------------------------------------------------------------------------------
  ----------------------------------------------------------------------------------------------------
                                         Calculator Scripting
  ----------------------------------------------------------------------------------------------------
  --------------------------------------------------------------------------------------------------->
  
<script src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/sd-js/tipsy.js"></script>
  
<script>

var priceCalculator = {
	
	init: function(){			
			
			//Tooltip init
			$('.var-option p img').tipsy({gravity: 'sw'});
			$('.rightsidepricing img').tipsy({gravity: 'se'});
			$('.static-option img').tipsy({gravity: 'sw'});	
			
			//Plans Init
			$('a#plan1').on('click', function(e){
					e.preventDefault();
					$('html,body').animate({scrollTop: $('#movetototal').offset().top}, 1000);				
					priceCalculator.showBar(0.00);
					//
					// Edit these for initial plan pricing
					//
					var options = {
							technicians: 1,
							assets: 25,
							locations: 4,
							accounts: 3,
							kb: 10,
							projects: 3,
							storage: 1							
						};	
					var optionsOnOff = {
							//on/off
							ad: 'off',
							auditor: 'off',
							ssl: 'off',
							invoices: 'off',
							ra: 'off'
						};
					// ---------------------- End Plan Edits
					priceCalculator.showFeatures();				
					priceCalculator.resetCalculator();
					priceCalculator.calculatePrice(options, optionsOnOff);
					priceCalculator.showCalculator(options, optionsOnOff);					
				});	
				
			$('a#plan2').on('click', function(e){
				  	e.preventDefault();
					$('html,body').animate({scrollTop: $('#movetototal').offset().top}, 1000);					
					priceCalculator.showBar(0.00);
					//
					// Edit these for initial plan pricing
					//
					var options = {
							technicians: 2,
							assets: 25,
							locations: 4,
							accounts: 3,
							kb: 11,
							projects: 3,
							storage: 1							
						};	
					var optionsOnOff = {
							//on/off
							ad: 'off',
							auditor: 'off',
							ssl: 'off',
							invoices: 'on',
							ra: 'off'
						};

					// ---------------------- End Plan Edits
					priceCalculator.showFeatures();
					priceCalculator.resetCalculator();				
					priceCalculator.calculatePrice(options, optionsOnOff);
					priceCalculator.showCalculator(options, optionsOnOff);					
				});	
				
			$('a#plan3').on('click', function(e){				
					e.preventDefault();	
					$('html,body').animate({scrollTop: $('#movetototal').offset().top}, 1000);
					priceCalculator.showBar(0.00);

					//
					// Edit these for initial plan pricing
					//
					var options = {
							technicians: 4,
							assets: 25,
							locations: 4,
							accounts: 12,
							kb: 17,
							projects: 3,
							storage: 1							
						};	
					var optionsOnOff = {
							//on/off
							ad: 'off',
							auditor: 'off',
							ssl: 'off',
							invoices: 'on',
							ra: 'on'
						};	
					// ---------------------- End Plan Edits

					priceCalculator.showFeatures();			
					priceCalculator.resetCalculator();
					priceCalculator.calculatePrice(options, optionsOnOff);
					priceCalculator.showCalculator(options, optionsOnOff);					
				});	
		
			$('a#plan4').on('click', function(e){				
					e.preventDefault();	
					$('html,body').animate({scrollTop: $('#movetototal').offset().top}, 1000);
					priceCalculator.showBar(0.00);
					//
					// Edit these for initial plan pricing
					//
					var options = {
							technicians: 5,
							assets: 25,
							locations: 4,
							accounts: 30,
							kb: 26,
							projects: 3,
							storage: 1							
						};	

					var optionsOnOff = {
						//on/off
							ad: 'on',
							auditor: 'off',
							ssl: 'on',
							invoices: 'on',
							ra: 'on'
						};				
					// ---------------------- End Plan Edits
					priceCalculator.showFeatures();
					priceCalculator.resetCalculator();
					priceCalculator.calculatePrice(options, optionsOnOff);
					priceCalculator.showCalculator(options, optionsOnOff);					
				});			
		},
	
	showBar: function(initPrice){
		if( $('.price-bar-row').is(":visible")){
								$('.price-bar-row').hide();
								$('.calculator-wrap').hide();
							};	
					$('.price-bar-row h1 span.price-number').text(initPrice);
					$('.price-bar-row').slideDown();
		},
	showCalculator: function(options, optionsOnOff){
		  //Toggle calculator
			$('a.calc').on('click', function(){
				if( $('.calculator-wrap').is(":hidden")){
						$('.calculator-wrap').show();
							
					}; 
				if( $('#pricing-table').is(":visible")){
						$('#pricing-table').hide();
					}	
				});
		
			// Show Calculator initially
			if( $('.calculator-wrap').is(":hidden")){$('.calculator-wrap').slideDown(1000);};
			
			priceCalculator.sliderInit(options, optionsOnOff);
			priceCalculator.OnOffInit(options, optionsOnOff);
		},
	showFeatures: function(){
		  //Toggle calculator
			$('a.showfeatures').on('click', function(){ 
				if( $('.calculator-wrap').is(":visible")){
						$('.calculator-wrap').hide();
					};
				if( $('#pricing-table').is(":hidden")){
						$('#pricing-table').show();	
					};						
				});
		},
		
	sliderInit: function(options, optionsOnOff){
					
		$( "#technicians" ).slider({
			max: 100,
			step: 1,
			value: options.technicians,
			change: function(event, ui) {
				options.technicians = ui.value;
				priceCalculator.countSlideInit(options, optionsOnOff);
				}
			});	
			
		$( "#assets" ).slider({
			max: 250,
			step: 1,
			value: options.assets,
			change: function(event, ui) {
				options.assets = ui.value;
				priceCalculator.countSlideInit(options, optionsOnOff);
				}
			});
		
		$( "#locations" ).slider({
			max: 50,
			step: 1,
			value: options.locations,
			change: function(event, ui) {
				options.locations = ui.value;
				priceCalculator.countSlideInit(options, optionsOnOff);
				}
			});
		
		$( "#accounts" ).slider({
			max: 100,
			step: 1,
			value: options.accounts,
			change: function(event, ui) {
				options.accounts = ui.value;
				priceCalculator.countSlideInit(options, optionsOnOff);
				}
			});
			
		$( "#kb" ).slider({
			max: 200,
			step: 1,
			value: options.kb,
			change: function(event, ui) {
				options.kb = ui.value;
				priceCalculator.countSlideInit(options, optionsOnOff);
				}
			});
			
		$( "#projects" ).slider({
			max: 100,
			step: 1,
			value: options.projects,
			change: function(event, ui) {
				options.projects = ui.value;
				priceCalculator.countSlideInit(options, optionsOnOff);
				}
			});
			
		$( "#storage" ).slider({
			max: 100,
			step: 1,
			value: options.storage,
			change: function(event, ui) {
				options.storage = ui.value;
				priceCalculator.countSlideInit(options, optionsOnOff);
				}
			});		
		
			priceCalculator.countSlideInit(options, optionsOnOff);				
		},
	
	OnOffInit: function(options, optionsOnOff){
		
			$.each(optionsOnOff, function(feature,setting){	
				//Cache price and dom call
				var price = priceCalculator.prices[feature]
				var that = $('#' + feature + '_on');
				
				//Set initial on or off
				if ( setting === "on" ){
						that.removeClass('off').addClass('on');
						if 	(feature === "ad") { var price = priceCalculator.prices.ad * priceCalculator.currentCount.technicians; }
							else if (feature === "auditor") { var price = priceCalculator.prices.auditor * priceCalculator.currentCount.locations; }
							else if (feature === "ra") { var price = priceCalculator.prices.ra * priceCalculator.currentCount.technicians; }
							else{	var price = priceCalculator.prices[feature]; }							
						$('.calc-var-info p span#' + feature + '_amount').text(price.toFixed(0));
						priceCalculator.currentCost[feature] = price;
						priceCalculator.showCurrentCost();						
					} else {
						that.removeClass('on').addClass('off');	
						$('.calc-var-info p span#' + feature + '_amount').text(0);
						priceCalculator.currentCost[feature] = 0;
						priceCalculator.showCurrentCost();
					}

					
				//unbind || bind click handlers
				that.unbind();
				that.on('click', function(){
						if( that.hasClass('off')){
								optionsOnOff[feature] === "on";
								that.removeClass('off').addClass('on');
								if 	(feature === "ad") { var price = priceCalculator.prices.ad * priceCalculator.currentCount.technicians; }
								else if (feature === "auditor") { var price = priceCalculator.prices.auditor * priceCalculator.currentCount.locations; }
								else if (feature === "ra") { var price = priceCalculator.prices.ra * priceCalculator.currentCount.technicians; }
								else{	var price = priceCalculator.prices[feature]; }
								$('.calc-var-info p span#' + feature + '_amount').text(price.toFixed(0));
								priceCalculator.currentCost[feature] = price;
								priceCalculator.showCurrentCost();
								
							} else {
								optionsOnOff[feature] === "off"
								that.removeClass('on').addClass('off');
								var price = priceCalculator.prices[feature];
								$('.calc-var-info p span#' + feature + '_amount').text(0);
								priceCalculator.currentCost[feature] = 0;
								priceCalculator.showCurrentCost();
							}
					});
			});
			
		},
		
	countSlideInit: function(options, optionsOnOff) {
		
			//Set slider values
			$.each(options, function(feature,setting){
			     $('#' + feature + '_count').text(setting.toFixed());
				 priceCalculator.currentCount[feature] = setting;				 			 
			});
			priceCalculator.calculatePrice(options, optionsOnOff);
		},
	
	
	calculatePrice: function(options, optionsOnOff){			
			$.each(options, function(feature,setting){
				
				var price = priceCalculator.prices[feature],
					free = priceCalculator.amountFree[feature];
				
				if(setting > free) {
						var newPrice = (setting - free) * price;
						$('span#' + feature + '_amount').text(newPrice.toFixed(2));
						priceCalculator.currentCost[feature] = newPrice;
						priceCalculator.showCurrentCost();
					} else {
						var newPrice = 0;
						$('span#' + feature + '_amount').text(0);
						priceCalculator.currentCost[feature] = newPrice;
						priceCalculator.showCurrentCost();
					}
							
			});
			
			$.each(optionsOnOff, function(feature, setting){
					if ( $('#' + feature + '_on').hasClass('on') ){
							if 	(feature === "ad") { var price = priceCalculator.prices.ad * priceCalculator.currentCount.technicians; }
								else if (feature === "auditor") { var price = priceCalculator.prices.auditor * priceCalculator.currentCount.locations; }
								else if (feature === "ra") { var price = priceCalculator.prices.ra * priceCalculator.currentCount.technicians; }
								else{	var price = priceCalculator.prices[feature]; }							
							$('.calc-var-info p span#' + feature + '_amount').text(price.toFixed(0));
							priceCalculator.currentCost[feature] = price;
							priceCalculator.showCurrentCost();							
						}
				});				
		},		
		
	// 
	// Edit:: Prices and amount offered for free
	//
	
	prices: {
		technicians: 9.95,
		assets: 0.05,
		locations: 0.25,
		accounts: 0.20,
		kb: 0.05,
		projects: 0.50,
		storage: 1.00,		
		ad: 2.00,
		auditor: 0.25,
		ssl: 10.00,
		invoices: 20.00,
		ra: 2.00
		},
	amountFree: {
		technicians: 1,
		assets: 25,
		locations: 4,
		accounts: 3,
		kb: 10,
		projects: 3,
		storage: 1,
		ad: 0,
		auditor: 0,
		ssl: 0,
		invoices: 0,
		ra: 0
		},

	// -------------------- End Editing
	
	
	// Place holders
	currentCost: {
		technicians: 0,
		assets: 0,
		locations: 0,
		accounts: 0,
		kb: 0,
		projects: 0,
		storage: 0,
		ad: 0,
		auditor: 0,
		ssl: 0,
		invoices: 0,
		ra: 0
		},
	// Place holders
	currentCount: {
		technicians: 0,
		assets: 0,
		locations: 0,
		accounts: 0,
		kb: 0,
		projects: 0,
		storage: 0,
		ad: 0,
		auditor: 0,
		ssl: 0,
		invoices: 0,
		ra: 0
		},
		
	showCurrentCost: function(){
		var overall = 0;		
		$.each(priceCalculator.currentCost, function(feature,cost){
			     overall = overall + cost;
				 $('div.rightsidepricing h1 span.price-number').text(overall.toFixed(2));				 
			});	
		},

	resetCalculator: function(){
			$.each(priceCalculator.currentCost, function(feature,cost){
			     priceCalculator.currentCost[feature] = 0;	
				 priceCalculator.currentCount[feature] = 0;	 
			});		
		}		
	}

priceCalculator.init();			

</script>

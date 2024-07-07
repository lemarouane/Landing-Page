<?php
/**
 * Template Name: Official-Rules
 * Description: A template that displays the official-rules
 */

function enqueue_privacy_page_styles() {
    if (is_page_template('official-rules.php')) {
        wp_enqueue_style('official-rules-page-css', get_template_directory_uri() . '/style/style.css');
    }
}
add_action('wp_enqueue_scripts', 'enqueue_privacy_page_styles');

get_header(); ?>

<style>
@font-face {
    font-family: 'Acumin Pro ExtraCondensed';
    src: url('<?php echo get_template_directory_uri(); ?>/fonts/acumin-pro-extra-condensed.woff2') format('woff2'),
         url('<?php echo get_template_directory_uri(); ?>/fonts/acumin-pro-extra-condensed.woff') format('woff'),
         url('<?php echo get_template_directory_uri(); ?>/fonts/acumin-pro-extra-condensed.otf') format('opentype');
    font-weight: normal;
    font-style: normal;
}

@font-face {
    font-family: 'Manrope';
    src: url('<?php echo get_template_directory_uri(); ?>/fonts/manrope-extralight.ttf') format('truetype');
    font-weight: 500;
    font-style: normal;
}

body {
    margin: 0;
    padding: 0;
    font-family: 'Manrope', sans-serif;
    box-sizing: border-box;
}


#privacy {
width: 100%;
 height: 100%;
 color:white;
 background: url('<?php echo get_template_directory_uri(); ?>/img/bg.png') no-repeat center center fixed;
     background-size: cover;
    padding-bottom: 3rem;
    padding-top:3rem ;
}

#privacy .container{
 display: flex;
 width: 80%;
 flex-direction: column;
 margin-left: auto;
 margin-right: auto;
 gap: 2rem;
}

#privacy .content{
 width: 100%;
 height: 100%;
}

#privacy .title{

    font-family: 'Acumin Pro ExtraCondensed', sans-serif;
    font-style: italic;
   font-size: 85px !important;
 line-height: 78px;
  font-weight: 900;
  text-transform: uppercase;

  
}
#privacy .subtitle{

font-family: 'Acumin Pro ExtraCondensed', sans-serif;
font-style: italic;
font-size: 35px !important;
line-height: 78px;
font-weight: 900;
text-transform: uppercase;


}


#privacy .content h1{
    font-family: 'Acumin Pro ExtraCondensed', sans-serif;
    font-style: italic;
    font-size: 48px;
    margin: 0;
    font-weight: 900;
    text-transform: uppercase;
    line-height: 90px;

 
  
}
#privacy .content h2{
    font-family: 'Acumin Pro ExtraCondensed', sans-serif;
    font-style: italic;
    font-size: 28px;
    margin: 0;
    font-weight: 900;
    text-transform: uppercase;
    line-height: 90px;

 
  
}

#privacy .content p{
 
  font-size: 18px;
  font-weight: 500;
  
  
}

@media only screen and (max-width: 800px) {

  #privacy .container{
 
    width: 90%;
   
   }
  #privacy .title{

  
    font-size: 48px !important;
  
    font-weight: 900;
  
    
  }
  
  
  #privacy .content h1{
  
    font-size: 40px;
    margin: 0;
        font-weight: 900;
        line-height: 50px;
        letter-spacing: 1px;
   
    
  }

  #privacy .subtitle{

  
font-size: 25px !important;

font-weight: 900;


}
  #privacy .content h2{
  
  font-size: 20px;
  margin: 0;
      font-weight: 900;
      line-height: 50px;
      letter-spacing: 1px;
 
  
}
}



#miniFooter{
  height: 100%;
  width: 100%;
  background: url('<?php echo get_template_directory_uri(); ?>/img/bg.png') no-repeat center center fixed;
      background-size: cover;
  color: white;
}

#miniFooter .container{
  display: flex;
  
padding: 3rem;
 
  justify-content: space-between;
 
}

#miniFooter .content{
  display: flex;
  flex-direction: column;
  width: 34%;
  gap: 1rem;
}



#miniFooter button{
  
  font-size: 16px;
  font-weight: 700;
  line-height: 24px;
  text-align: left;
background-color: #009CFF;
padding: 16px 24px 16px 24px;
border-radius: 128px;
border: none;
color: white;
cursor: pointer;
transition: 0.3s;

}


#miniFooter button:hover{
  
  font-size: 16px;
  
background-color: white;

color: #009CFF;

}




@media only screen and (max-width: 950px) {
  #miniFooter .container{
    flex-direction: column;
    gap: 2rem;
   padding: 2rem;
  }

  #miniFooter .content{
    display: flex;
    flex-direction: column;
    width: 100%;
    gap: 0;
  }

  #miniFooter .content p{
    margin-bottom: 10px;
  }
}




.prize-table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 1rem;
}

.prize-table td {
    border: 1px solid #ffffff;
    padding: 1rem;
    text-align: center;
    font-size: 16px;
    font-weight: 500;
    background-color: rgba(255, 255, 255, 0.1); /* Adjust the background color as needed */
}

.prize-table tr:nth-child(even) td {
    background-color: rgba(255, 255, 255, 0.2); /* Adjust the alternate row color as needed */
}
@media only screen and (max-width: 450px) {
    .prize-table td {
        padding: 10px;
    }
}



.content a {
    color: #009CFF;
    text-decoration: none;
    font-weight: bold;
}

.content a:hover {
    text-decoration: underline;
}


</style>

<section id="privacy">
        <div class="container">
            <div class="content">
                <h1 class="title"><center>GELBER GROUP “THE BREAKOUT” COMPETITION OFFICIAL RULES </center></h1>
                <h2 class="subtitle"><center>Dates: September 9, 2024 – October 31, 2024</center></h2>
                <p>NO PURCHASE OR PAYMENT IS NECESSARY TO ENTER OR WIN THIS COMPETITION. A PURCHASE OR PAYMENT WILL NOT INCREASE YOUR CHANCES OF WINNING. THIS IS A COMPETITION OF SKILL.
                </p>
            </div>
            <div class="content">
                <h1>SPONSOR</h1>
                <p>Gelber Group, LLC (the “Sponsor”) will serve as the sponsor of “The Breakout” Competition (the “Competition”). </p>
            </div>
            <div class="content">
                <h1>PURPOSE</h1>
                <p>The purpose of the Competition is to provide eligible entrants with the ability to compete and enhance such entrants’ discretionary trading talents and skills solely related to Eligible Trading Instruments. </p>                    
                   
            </div>
            <div class="content">
                <h1>ELIGIBILITY</h1>
                <p>Prior to the Competition Period, you may request to enter the Competition and become an entrant if (a) you are a legal resident of the 50 United States and the District of Columbia and are twenty-one (21) years of age or older and (b) you visit the Sponsor’s website at www.gelbergroup.com/thebreakout (the “Application Website”), complete all fields in the application found on the Application Website (the “Application”), and provide all information requested by Sponsor in connection with the Application (each of such persons, an “Applicant”).

Prior to the Competition Period, Sponsor will select certain of the Applicants to participate in the Competition based on such Applicants’ Applications and such other information and factors as Sponsor may determine in its sole and absolute discretion. Applicants who are selected by the Sponsor to be eligible to participate in the Competition (the “Accepted Applicants”) will be notified by Sponsor at least two (2) weeks prior to the Competition Period. After the Accepted Applicants have been notified by Sponsor pursuant to the immediately preceding sentence, each Accepted Applicant shall be required to attend one or more training sessions related to the Platform, as determined by Sponsor in its sole and absolute discretion (collectively, the “Training”). All Applicants who are not Accepted Applicants or who are Accepted Applicants who do not complete the Training shall not be entitled to participate in the Competition or become an entrant to the Competition. 

You need not be present to win. Employees (and their immediate families or those living in the same household) of the Sponsor and its respective affiliates, subsidiaries, divisions, parent and related companies, suppliers, printers and advertising, promotional and judging agencies (including the Committee) are not eligible to enter or win. Individuals who appear on the U.S. Government Department of Treasury’s Specially Designated Nations List are also not eligible to enter or win. 

An “entrant” is an Accepted Applicant who completes the Training prior to the Competition Period and submits an entry (together with all related Competition Materials) in accordance with these Official Rules.

Failure to meet the eligibility requirements set forth in these Official Rules will result in a potential entrant’s entry being invalid and forfeiture of any Prize. Subject to applicable laws, Sponsor’s decisions regarding eligibility and all other aspects of the Competition are final and binding.
</p>
            </div>
            <div class="content">
                <h1>COMPETITION PERIOD</h1>
                <p>The Competition begins at 12:01 a.m. Central Time (“CT”) on September 9, 2024 and ends at 3:00 p.m. CT on October 31, 2024 (the “Competition Period”). The duration of the trading part of the Competition is approximately eight (8) weeks. All times in these Official Rules are CT. Sponsor’s computer will be the official clock for the Competition.
</p>
            </div>


            <div class="content">
                <h1>HOW TO ENTER</h1>
                <p>Prior to or on the first day of the Competition Period, Sponsor will provide each Accepted Applicant with an account for the Competition (each, an “Account”) on a simulator software platform of Trading Technologies (the “Platform” and with the Application Website, the “Websites”). For the purposes of the Competition, only trading activity in Eligible Trading Instruments carried out under an Account on the Platform will be considered for an entrants’ entry into the Competition. The Sponsor’s pre-determined and set parameters on each Account cannot be changed by an entrant, and the Account cannot be reset to its initial state by an entrant during the Competition Period. Each Account may be deleted by Sponsor without notice after the Competition Period and entrants may lose any and all data upon the deletion of the Accounts. 

The Competition will only include simulated, and not actual, trading through the Account on the Platform. No real currency, virtual amounts convertible into currency or cryptocurrency will be used for trading during the Competition.

In order to submit an entry to the Competition, each entrant must complete all of the following tasks and deliver to Sponsor the following materials (collectively with all other materials, data, information, and writings required by these Official Rules or requested by Sponsor, the “Competition Materials”):
</p>

                    <li>Each entrant must consummate trades during the Competition Period in certain futures contracts and/or foreign exchange (“FX”) cash markets, each of which may be limited by Sponsor as set forth on the Platform (each, an “Eligible Trading Instrument”).                     </li>
                    <li>Each entrant must prepare and submit a weekly trading plan to Sponsor on the Platform before or on the date that begins each week of the Competition Period including the information required by Sponsor for such plans as set forth on the Platform (which, for clarification, shall constitute Competition Materials). </li>
                    <li>Each entrant must prepare and submit a daily trading recap to Sponsor on the Platform on each business day of the Competition Period including the information required by Sponsor for such recaps as set forth on the Platform (which, for clarification, shall constitute Competition Materials).                    </li>
                    
                    <p>If trades entered by an entrant are not in compliance with these Official Rules, then such trades will be rejected on the Platform. In addition, unusually high numbers of trades or other problematic activities in an Account may lead to a suspension of such Account. 

A particular entrant’s placement during the Competition Period and at the end of the Competition (i.e., the last day of the Competition) is determined based on the realized profits and losses on such entrants’ Account. Realized profits and losses for the purposes of the Competition and determining the Winners are the profits and losses realized on closed positions as set forth in the particular Account. All open positions in each Account must be closed out by the entrants by no later than 3:00 p.m. CT on October 31, 2024. Failure to close out open positions in an Account by such time will result in disqualification of the entrant.

All entries must be received by 12:59 p.m. CST on August 30, 2024. Illegible, incomplete and duplicate entries will be disqualified. No responsibility is assumed by the Sponsor(s) for any inability of a potential entrant to successfully enter the Competition for any reason. 

If it is discovered that an entrant has registered or attempted to enter more than once using multiple Accounts, e-mail addresses, telephone numbers, multiple identities, IP addresses, use of proxy servers or any other method of unauthorized entry, all in Sponsor’s sole and absolute discretion, all of that entrant’s entries will be declared null and void, entrant will be disqualified from the Competition and any Prize that entrant might have been entitled to receive will not be awarded to him/her. Entries that are late, lost, illegible, duplicated, mechanically reproduced, contain false information, damaged, misdirected, mutilated, garbled or incomplete, altered or otherwise irregular in the sole discretion of Sponsor, that have been submitted or generated using robotic, programmed, script, or any other automated means, or illicit means, or do not conform with or satisfy any or all of the conditions set out in the Official Rules, as determined by Sponsor in its sole and absolute discretion, may be judged void and disqualified. 

Each entrant may only submit one (1) entry to the Competition and, therefore, may only enter the Competition one (1) time. 

Any entry (or any Competition Materials provided in connection with an entry) that violates any of these Official Rules will not be eligible for the Competition. 

</p>
            </div>



            <div class="content">
                <h1>LICENSES</h1>
                <p>By entering this Competition, each Entrant authorizes Sponsor to edit, alter, copy, exhibit, publish, distribute and use any writing, image, audio, video or data of such entrant submitted with the Competition Materials or related to the entry of such entrant (the “Licensed Material”), including names, without payment or any other consideration, in future advertisements, promotion materials, Sponsor-related websites (including the Websites) and mobile applications, social media channels, trainings, and any derivative works without any additional compensation or award. Each entrant understands that future use of the Licensed Material may not credit such entrant.

Sponsor may also use the Licensed Material in any advertising, such as online digital, social media, television, print or radio, as well as any flyers, brochures, annual reports, press kits or any other print or digital communications. This authorization extends to all languages, media, formats and markets now known or in the future.

Each entrant acknowledges this authorization shall continue indefinitely. 

Each entrant acknowledges that such entrant waives any right that such entrant may have (i) to inspect or approve any finished product in which the Licensed Material may appear and (ii) to royalties or other compensation arising from or related to the use of any Licensed Material. 

Each entrant understands and agrees that these materials, including any Competition Materials, shall become the sole property of Sponsor and may not be returned.

</p>
            </div>



            <div class="content">
    <h1>PRIZE AND APPROXIMATE RETAIL VALUE</h1>
    <p>There will be a total of three (3) prizes (each a “Prize” and collectively, the “Prizes”), awarded to three (3) entrants. The Prizes are as follows:</p>
    <table class="prize-table">
        <tr>
            <td> </td>
            <td>Number of Applicable Type of Prize</td>
            <td>Prize</td>
            <td>ARV</td>
        </tr>
        <tr>
            <td>Grand Prize</td>
            <td>One (1)</td>
            <td>$20,000</td>
            <td>$20,000</td>
        </tr>
        <tr>
            <td>Second Place Prize</td>
            <td>One (1)</td>
            <td>$10,000</td>
            <td>$10,000</td>
        </tr>
        <tr>
            <td>Third Place Prize</td>
            <td>One (1)</td>
            <td>$50,000</td>
            <td>$50,000</td>
        </tr>
    </table>
    <p>Approximate retail value (“ARV”) for all Prizes is $35,000. All Prizes will be awarded. Sponsor will award all Prizes to the Winners (defined below) in cash or by wire transfer (to an account designated in writing by a Winner to Sponsor), as determined by Sponsor in its sole discretion. All federal, state, and local tax liabilities are the sole responsibility of the winners of the Prizes (collectively, the “Winners”). 

No transfer, substitution, or cash equivalent for the Prize permitted, except by Sponsor in its sole discretion. Winner may be required to complete and return (i) an IRS W-9 form (i.e. Request for Taxpayer Identification Number and Certification) and any other tax-related documents reasonably requested by Sponsor and (ii) and Affidavit of Eligibility and Publicity / Liability Release (the “Required Prize Documents”). 
</p>


</div>



<div class="content">
                <h1>SELECTION OF WINNERS; COMMITTEE</h1>
                <p>The Winners of the Prizes will be the first three entrants in the Competition who achieved the greatest profit for such entrants’ trading in Eligible Trading Instruments in such entrant’s Account as shown on the Platform as of the end time of the Competition Period.
For clarification, an entrant must have a balance in the Account (as shown on the Platform) of zero or more at the end time of the Competition Period in order to be declared a Winner. 
Notwithstanding any other term in these Official Rules, if there are less than three (3) entrants who have a balance in their Accounts (as shown on the Platform) that are not zero or more (to show no net losses in such Accounts for the Competition) at the end time of the Competition Period, less than three (3) Winners will be awarded the Prizes and all other Prizes for the Competition will not be awarded by Sponsor.
The Grand Prize will be awarded to the entrant in the Competition who received the greatest profit for such entrant’s Eligible Trading Investments on such entrant’s Account as shown on the Platform as of the end time of the Competition Period. The Second Place Prize will be awarded to the entrant in the Competition who received the second greatest profit for such entrant’s Eligible Trading Instruments on such entrant’s Account as shown on the Platform as of the end time of the Competition Period. The Third Place Prize will be awarded to the entrant in the Competition who received the third greatest profit for such entrant’s Eligible Trading Instruments on such entrant’s Account as shown on the Platform as of the end time of the Competition Period.
If, according to the results of the Competition on the Platform, two participants earned the same profit for the Competition, then the Prize for a particular place and the next place will be combined and divided in equal shares between such Winners. The Winners who place after the foregoing participants will receive the Prize that reflects such Winner’s placement relative to such foregoing Winners. A maximum of three (3) Winners will be awarded the Prizes for the Competition.

In the event of a dispute, entries will be deemed to have been submitted by the authorized account holder of the e-mail address associated with the Account.  “Authorized account holder” is defined as the person who is assigned an e-mail address by an internet provider, online service provider, or other organization (e.g. business, educational institute, etc.) that is responsible for assigning e-mail addresses for the domain associated with the submitted e-mail address. A potential Winner may be required to provide proof that he/she is the authorized account holder of the e-mail address associated with the entry and the Account to be confirmed a Winner.  

All entries and Competition Materials received during the Competition Period may additionally be reviewed by a committee of approximately eight (8) judges (the “Committee”) selected solely by Sponsor, in its discretion. The Committee may exercise all rights of Sponsor granted to Sponsor under these Official Rules. In addition, the Committee may contact entrants or the Winners during or after the Competition Period related to such entrant’s or Winner’s entry or Competition Materials. 

</p>
            </div>




            <div class="content">
                <h1>PRIZE CONDITIONS</h1>
                <p> No substitution for the Prize will be permitted. If necessary due to unavailability of the Prize, a prize of equal or greater value will be awarded at the discretion of the Sponsor. Prize is not transferable, assignable or redeemable for cash. Winner will be required to execute and return the Required Prize Documents within fifteen (15) days of issuance by Sponsor. Failure to return all Required Prize Documents in this time period may result in the Winner being disqualified and an alternate Winner selected in accordance with these Official Rules. If a Prize notification is returned to Sponsor as undeliverable or if an entrant is found to be ineligible or declines to accept the Prize for any reason, an alternate Winner will be selected. By entering this Competition and/or accepting the Prize, each Winner and entrant hereby consent (except where prohibited by law) to the reasonable use by Sponsor(s) of such Winner’s and/or entrants’ entry, Competition Materials, photograph, voice, likeness and/or image, hometown address, contents of the entry form and the name and age of such Winner and/or entrant without any further compensation for any future promotional activity related to this Competition.</p>
            </div>


            <div class="content">
                <h1>CONDUCT OF PARTICIPATION IN THE COMPETITION</h1>
                <p> By entering the Competition, entrant affirms that he or she has read and agrees to abide by the Official Rules and the decisions of the Sponsor. Sponsor reserves the right to disqualify any entrant acting in violation of the Official Rules or found tampering with the entry process or with the operation of the Competition or the Websites. The Competition is governed by the laws of the United States and, by entering, the Winner and each entrant hereby submit to the jurisdiction and venue of the federal, state and local courts located in Chicago, Illinois. As a condition of entering this Competition, each entrant agrees that: (a) under no circumstances will the entrant be entitled or permitted to obtain awards for, and the entrant expressly waives all rights to claim, punitive, incidental, and consequential damages, and any other damages, other than actual, out-of-pocket expenses, and any and all rights to have damages multiplied or otherwise increased, and in no event shall attorney’s fees be recoverable by either party; and (b) any and all disputes, claims and causes of action arising out of or connected with the Competition or the Prize awarded shall be resolved individually, without resort to any form of class action.                 </p>
            </div>


            <div class="content">
                <h1>CONDUCT OF PARTICIPATION IN THE COMPETITION</h1>
                <p> By entering the Competition, entrant affirms that he or she has read and agrees to abide by the Official Rules and the decisions of the Sponsor. Sponsor reserves the right to disqualify any entrant acting in violation of the Official Rules or found tampering with the entry process or with the operation of the Competition or the Websites. The Competition is governed by the laws of the United States and, by entering, the Winner and each entrant hereby submit to the jurisdiction and venue of the federal, state and local courts located in Chicago, Illinois. As a condition of entering this Competition, each entrant agrees that: (a) under no circumstances will the entrant be entitled or permitted to obtain awards for, and the entrant expressly waives all rights to claim, punitive, incidental, and consequential damages, and any other damages, other than actual, out-of-pocket expenses, and any and all rights to have damages multiplied or otherwise increased, and in no event shall attorney’s fees be recoverable by either party; and (b) any and all disputes, claims and causes of action arising out of or connected with the Competition or the Prize awarded shall be resolved individually, without resort to any form of class action. ANY ATTEMPT BY AN ENTRANT OR ANY OTHER INDIVIDUAL TO DELIBERATELY DAMAGE ANY WEBSITE RELATED TO SPONSOR OR THE COMPETITION (INCLUDING THE WEBSITES) OR UNDERMINE THE LEGITIMATE OPERATION OF THE COMPETITION MAY BE IN VIOLATION OF CRIMINAL AND CIVIL LAWS, AND SHOULD SUCH AN ATTEMPT BE MADE, SPONSOR RESERVES THE RIGHT TO SEEK DAMAGES FROM SUCH ENTRANT TO THE FULLEST EXTENT PERMITTED BY LAW.

BY APPLYING FOR, ENTERING OR OTHERWISE PARTICIPATING IN THE COMPETITION, EACH APPLICANT AND ENTRANT HEREBY: (A) REPRESENTS AND WARRANTS THAT ALL INFORMATION PROVIDED IN CONNECTION WITH THE COMPETITION IS TRUE, ACCURATE, AND COMPLETE; AND (B) AGREES TO COMPLY WITH ALL FEDERAL, STATE, AND LOCAL LAWS AND REGULATIONS.
                </p>
            </div>


            <div class="content">
                <h1>LIMITATIONS OF LIABILITY</h1>
                <p> Released Parties (as defined herein) are not responsible for any incorrect or inaccurate entry or entries, errors in calculations, theft, tampering, destruction, or unauthorized access to, or alteration of entries; printing or other errors; and any entries or mail which are late, lost, delayed, incomplete, misdirected, stolen, mutilated, illegible, postage due or any combination thereof. Sponsor reserves the right to modify, amend, postpone, suspend or terminate the Competition or these Official Rules in the event that it becomes necessary due to circumstances beyond Sponsor’s control, or unforeseen events, as determined by Sponsor in its sole and exclusive discretion, including without limitation, Sponsor’s failure to received sufficient qualified Applicants, the failure to Accepted Applicants to participate in the Competition or follow these Official Rules, Acts of God, pandemic, epidemic, “shelter in place” and similar orders and other government actions. Without limiting the generality of the foregoing, Sponsor may decide to postpone deadlines herein, or terminate the Competition early. In the event the Competition is terminated early, the Winners will be selected from all eligible entries received at the time of termination. Additionally, Released Parties (as defined herein) are not responsible for any delays or outages related to the Websites, which each entrant acknowledges may affect the results of the Competition and the selection of the Winners.

THIS COMPETITION, THE PLATFORM AND ALL PRIZES ARE PROVIDED “AS IS” WITHOUT WARRANTY, REPRESENTATION, GUARANTEE OR CONDITION OF ANY KIND, EXPRESS, IMPLIED, STATUTORY OR OTHERWISE, INCLUDING BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE OR NON-INFRINGEMENT. SOME JURISDICTIONS DO NOT ALLOW THE DISCLAIMER OF IMPLIED OR OTHER WARRANTIES SO THE ABOVE DISCLAIMER MAY NOT APPLY TO YOU TO THE EXTENT SUCH JURISDICTIONS LAW IS APPLICABLE TO YOU AND THESE OFFICIAL RULES.                  </p>
            </div>



            <div class="content">
                <h1>RELEASE OF LIABILITY</h1>
                <p> By participating in or applying to the Competition, each Winner, each entrant and each Applicant agrees to release, discharge, indemnify and hold harmless Sponsor and each of its affiliated entities (including the Committee), affiliates, subsidiaries, parent corporations and companies, and all of their respective officers, directors, shareholders and principals, employees, representatives, agents and franchisees (collectively, “Released Parties”), from and against any claims made by such Winner, entrant or Applicant or any other third parties related in any way to the operation of this Competition, as well as any other claims, damages or liability due to any injuries, damages or losses (whether alleged, threatened, or actual) to any person (including death) or property of any kind resulting in whole or in part, directly or indirectly, from (i) any acceptance, possession, misuse or use of the Prize and (ii) participation in this Competition or any related activity. Each Winner assumes all liability for any injury or damage caused, or claimed to be caused, by participation in this Competition or acceptance, use or redemption of the Prize.                </p>
            </div>



            <div class="content">
                <h1>ADDITIONAL TERMS AND CONDITIONS</h1>
                <p>The following are conditions to winning the Prize and additional terms and conditions binding on entrants and the Winners:                </p>
                <ol type="a">
  <li>All federal, state and local tax liabilities and any applicable fees or incidentals associated with accepting the Prize or participation in this Competition are the sole responsibility of the entrants and the Winners. Sponsor may, in its sole discretion, withhold from the amount of the Prize any and all federal, state and local tax liabilities and any applicable fees associated with accepting the Prize or participation in this Competition.
  </li>
  <li>If the Winner declines the Prize, or if person who is chosen is not an eligible entrant or has not complied with these Official Rules, such person shall be disqualified and another person will be chose for the Prize. 
  </li>
  <li>No transfer, substitution, division or splitting of the Prize is allowed. 
</li>
<li>Acceptance of the Prize constitutes permission by the Winners to the Sponsor and its agencies to use the Winner’s entry and Competition Materials for purposes of advertising and trade without further compensation, in perpetuity and in any and all media now known or hereafter discovered, unless prohibited by law. 
</li>
<li>Decisions of Sponsor are final with respect to determination of the Winners and all matters with respect to the conduct of the Competition. 
 
</li>
<li>By participating in this Competition, entrants and the Winners agree to be bound by the Official Rules.
 
</li>
</ol>  
            </div>


            <div class="content">
    <h1>WINNERS LIST</h1>
    <p>You may obtain copies of the Official Rules or a list of Winners (available after the Winners are determined by Sponsor) by sending a self-addressed, stamped envelope that reads: The Breakout Competition - WINNERS - or - OFFICIAL RULES (please specify), Gelber Group, LLC, 350 North Orleans Street, S10000, Chicago, IL 60654. All requests must be received within six (6) months after the end of the Competition Period. These Official Rules also available at <a href="https://www.gelbergroup.com/thebreakout" target="_blank">www.gelbergroup.com/thebreakout</a>.</p>
</div>


<div class="content">
    <h1>PRIVACY / USE OF PERSONAL INFORMATION</h1>
    <p>By participating in the Competition, each entrant consents to Sponsor’s or authorized agents’ collection, use, and disclosure of entrant’s personal information for the purposes of administering and promoting the Competition and Prize fulfillment. Each entrant acknowledges that he/she has read, understood and accepted the applicable Sponsor’s Privacy Policy, which provides more information about Sponsor’s privacy practices and is located at <a href="https://www.gelbergroup.com/gelber-privacy-notice/" target="_blank"> https://www.gelbergroup.com/gelber-privacy-notice</a> (the “Privacy Policy”).

Each entrant agrees to the processing of personal data for the purpose of conducting the Competition. Account and Platform usernames, along with records from the Accounts, Platform and the Competition Materials, may be be utilized on leaderboards, landing pages, and other portions of the Platform for the purpose of running the Competition by showcasing the statistics, achievements and results of each of the entrants. In the event of any conflict between these Official Rules and the Privacy Policy, the terms and conditions of these Official Rules shall govern and prevail. The personal information of the Winners may be provided to corporate affiliates of the Sponsor and for publicity purposes surrounding the Competition. 


Entrants may be offered the optional opportunity to receive coupons, newsletters, informational materials, marketing communications, or other special promotions, or other offers from Sponsor, affiliates within the Sponsor groups, and/or third-party service providers. Entrants will not be contacted for marketing purposes unless they have provided their express consent.


By accepting the Prize, and unless prohibited by law, each Winner agrees to Sponsor’s use of Winner’s entry and Competition Materials, his/her name, city/province of residence, picture, biographical information, statements, voice and likeness in any advertising and publicity Sponsor and its/their respective successors, assigns and licensees may conduct relating to the Competition in any media or format, whether now known or hereafter developed, including but not limited to the internet, at any time or times in perpetuity, without further compensation or notice, and hereby releases Released Parties from any liability with respect thereto.
</p>
</div>




<div class="content">
                <h1>SEVERABILITY</h1>
                <p> If a court of competent jurisdiction determines that any of the provisions of these Official Rules are unenforceable for any reason, each such provision shall be deemed to be modified and such court is hereby authorized and directed to modify any such provision, in a manner to render it enforceable and each provision, as modified, shall then be fully enforceable as though set forth in these Official Rules. Any such modification shall not affect the other provisions of these Official Rules in any respect. The invalidity or unenforceability of any provision of these Official Rules shall not affect the continued validity or enforceability of any other provision of these Official Rules.
                </p>
            </div>

            <p> SPONSOR RESERVES THE RIGHT TO AMEND THE ABOVE RULES AT ANY TIME. 

THIS COMPETITION IS VOID WHERE PROHIBITED OR RESTRICTED BY LAW OR WHERE BONDING, REGISTRATION, OR OTHER REQUIREMENTS WOULD BE REQUIRED BUT HAVE NOT BEEN MET.

© 2024 Gelber Group, LLC. All rights reserved.

            </p>

        </div>

</section>

<section id="miniFooter">
        <div class="container">
            <div class="logo"><img src="<?php echo get_template_directory_uri(); ?>/icons/br.svg" alt=""></div>
            <div class="content">
                <p><center>GELBER GROUP
THE BREAKOUT COMPETITION
ABBREVIATED RULES
Dates: September 9, 2024– October 31, 2024 </center></br>
                    Abbreviated Rules. NO PURCHASE OR PAYMENT NECESSARY. To participate, you must (a) be a legal resident of the 50 United States or the District of Columbia, (b) be 21 years of age or older, (c) be selected by Sponsor to participate in the Competition, and (d) complete all required prerequisite actions mandated by Sponsor (including certain training courses) prior to the Competition Period. The Competition begins on begins September 9, 2024 and ends on October 31, 2024. For complete details, see Official Rules available at www.gelbergroup.com/thebreakout. Sponsor: Gelber Group, LLC.
VOID WHERE PROHIBITED OR RESTRICTED BY LAW OR WHERE BONDING, REGISTRATION,OR OTHER REQUIREMENTS WOULD BE REQUIRED BUT HAVE NOT BEEN MET.
2024 Gelber Group, LLC. All rights reserved.</p>


            </div>
            <div class="button" onclick="window.location.href='https://boards.greenhouse.io/gelbergroup/jobs/4363017006#app';"><button>JOIN NOW</button></div>
        </div>
</section>

<?php get_footer(); ?>

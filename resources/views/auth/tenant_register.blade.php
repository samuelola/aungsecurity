@extends('auth.auth_master')

@section('content')

<style>

input {
  cursor: text !important;
}

#serviceAgreement{
  cursor: pointer !important;
}


</style>

   <div class="container-fluid">
      <div class="row">
        <div class="col-xl-7 login_one_image"><img class="bg-img-cover bg-center" src="../assets/images/login/2.jpg" alt="looginpage"></div>
        <div class="col-xl-5 p-0">
          <div class="login-card login-dark login-bg">
            <div>
              <div><a class="logo" href="{{route('tenant_create')}}">
              <img class="img-fluid for-light m-auto" style="width:100px;height:100px;" src="{{asset('aung_logo_white.png')}}" alt="looginpage">
              <img class="for-dark" src="{{asset('aung_logo_blue.png')}}" style="width:120px;height:100px;" alt="logo"></a></div>
              <div class="login-main"> 
                <form class="theme-form" action="{{route('tenant_store')}}" method="post">
                    @csrf
                  <h2 class="text-center">Signup</h2>
                  <p class="text-center">Enter your credentials to Signup</p>
                  <div class="form-group">
                    <label class="col-form-label">First Name</label>
                    <input class="form-control" name="first_name" type="text" value="{{ old('first_name') }}"  placeholder="John">
                     @error('first_name')
                     <span class="invalid-feedback d-block" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror 
                  </div>
                  <div class="form-group">
                    <label class="col-form-label">Lastname</label>
                    <input class="form-control" name="last_name" type="text" value="{{ old('last_name') }}" placeholder="Doe">
                     @error('last_name')
                    <span class="invalid-feedback d-block" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror 
                  </div>
                  <div class="form-group">
                    <label class="col-form-label">Estate Name</label>
                    <input class="form-control" name="estate_name" type="text" value="{{ old('estate_name') }}"  placeholder="Enter Estate name">
                     @error('estate_name')
                        <span class="invalid-feedback d-block" role="alert"><strong>{{ $message }}</strong></span>
                     @enderror 
                  </div>
                  <div class="form-group">
                    <label class="col-form-label">Subdomain Name</label>
                    <input class="form-control" name="subdomain" type="text" value="{{ old('subdomain') }}"  placeholder="Enter estate name, e.g goodwill">
                    <p class="mb-0 text-title-gray" style="color:#2f2c2b;">Note : No spaces between for the subdomain name and must be in small letters</p>
                     @error('subdomain')
                      <span class="invalid-feedback d-block" role="alert"><strong>{{ $message }}</strong></span>
                     @enderror 
                  </div>
                  <div class="form-group mb-3">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="serviceAgreement" name="service_agreement" value="1">
                      <label class="form-check-label" for="serviceAgreement">
                        I agree to the &nbsp;
                        <a href="#" data-bs-toggle="modal" data-bs-target="#serviceAgreementModal" style="color:#1d194b !important; font-weight: 700;">
                          service agreement
                        </a>
                      </label>
                    </div>

                    @error('service_agreement')
                      <span class="invalid-feedback d-block" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
                  <div class="form-group mb-0 checkbox-checked">
                   
                    <div class="text-end mt-3">
                      <button class="btn btn-primary btn-block w-100" type="submit">Signup</button>
                    </div>
                  </div>
                  
                 
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>

<div class="modal fade" id="serviceAgreementModal" tabindex="-1" aria-labelledby="serviceAgreementModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-scrollable">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title" id="serviceAgreementModalLabel">Service Agreement</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

        <div class="modal-body">
          
          <div style="margin-bottom:20px;text-align:center;">
              <h3>AUNG SOLUTIONS NIGERIA LIMITED-SERVICE AGREEMENT</h3>

              <h3>AUNG ONE PLATFORM SERVICE AGREEMENT</h3>
          </div>

          <p>This Service Agreement (“Agreement”) governs access to and use of the AUNG ONE platform and related services provided by AUNG Solutions Nigeria Limited.</p>

          <p>This Agreement is made available electronically and shall become legally binding upon electronic acceptance by the subscribing estate, client, or authorized administrator through the AUNG ONE platform, including but not limited to selecting or ticking the “I Agree”, “Accept”, or “Accept Terms and Conditions” checkbox, or by otherwise accessing or using the platform.</p>

          <p>By accepting this Agreement electronically, the subscribing estate or authorized representative confirms that they have read, understood, and agreed to be bound by the terms and conditions contained herein.</p>

          <p>For the purposes of this Agreement:</p>

          <p>AUNG Solutions Nigeria Limited, a company duly incorporated under the laws of the Federal Republic of Nigeria (hereinafter referred to as “AUNG”), owns and operates the AUNG ONE platform and provides related digital infrastructure, licensing, support, and operational services.</p>

          <p>The residential estate, gated community, property management entity, estate administrator, or authorized representative that electronically accepts this Agreement through the AUNG ONE platform (hereinafter referred to as the “Estate” or “Client”) shall be deemed to have entered into this Agreement.</p>

          <p>AUNG and the Estate may individually be referred to as a “Party” and collectively as the “Parties.”</p>

          <p>This Agreement shall take effect on the date and time the Estate electronically accepts the Agreement on the AUNG ONE platform (“Effective Date”).</p>

          <p>Electronic acceptance shall constitute a valid and binding agreement between the Parties and shall have the same legal force and effect as a handwritten signature, in accordance with applicable laws governing electronic transactions in the Federal Republic of Nigeria.</p>

          <h3>1. Agreement Overview</h3>

          <p>This Agreement sets out the terms and conditions under which AUNG Solutions Nigeria Limited (“AUNG”) grants the Estate a limited, revocable, non-transferable, and estate-specific license to access and use the AUNG ONE platform and related services.</p>

          <p>The license granted under this Agreement shall be exclusive within the Estate. During the term of this Agreement, the Estate agrees to use AUNG ONE as its primary and exclusive platform for the digital management of estate payments, resident access control, visitor authorization, and other related operational services. Accordingly, the Estate shall not deploy, permit, integrate, or operate any competing or substantially similar platform, software, or technological solution within the Estate that performs functions similar to the AUNG ONE platform without the prior written consent of AUNG.</p>

          <p>The Estate acknowledges that the AUNG ONE platform forms part of the operational infrastructure of the Estate, and that certain estate services and administrative processes may be structured to operate through the platform.</p>

          <p>The AUNG ONE platform provides a community infrastructure solution designed to support estate and property management operations, including but not limited to:</p>

          <p> digital payment facilitation and transaction management;<br>
           service charge and subscription management;<br>
           visitor verification and access code generation;<br>
           resident identity and access control administration;<br>
           transaction reporting, audit trails, and reconciliation tools; and<br>
           other operational tools and features made available through the platform from time to time.</p>

          <p>This Agreement governs the licensing, provision, maintenance, support, and permitted use of the AUNG ONE platform and all related services provided by AUNG.</p>

          <p>Unless earlier terminated in accordance with the provisions of this Agreement, this Agreement shall remain in full force and effect for as long as the Estate continues to access or use the AUNG ONE platform.</p>

          <p>In the event of any conflict between this Agreement and any prior oral or written discussions, representations, communications, or understandings relating to the subject matter herein, the provisions of this Agreement shall prevail, unless expressly agreed otherwise in writing by AUNG.</p>

          <h3>2. Scope of Services</h3>

          <p>The purpose of this Agreement is to define the scope, structure, and conditions under which AUNG Solutions Nigeria Limited (“AUNG”) provides access to, operates, maintains, and supports the AUNG ONE platform for the Estate.</p>

          <p>Under this Agreement, AUNG shall provide the Estate with access to the AUNG ONE platform and related services designed to enable the Estate to manage structured payments, resident subscriptions, access authorization, reporting, and related community operational workflows, in accordance with the selected service plan.</p>

          <p>The scope of services under this Agreement includes, without limitation:</p>

          <p> provision of a licensed, cloud-based AUNG ONE platform for estate operations;<br>
           configuration of estate-level rules, roles, permissions, and administrative controls within the platform;<br>
           enablement of resident payment processing, transaction records, and resident dashboards;<br>
           provision of visitor and service personnel access authorization tools, subject to applicable payment compliance and platform policies;<br>
           access to estate-level reports, transaction records, access logs, and audit trails; and<br>
           ongoing platform maintenance, updates, security improvements, and technical support, subject to the applicable service plan.</p>

          <p>This Agreement establishes clear ownership, accountability, and operational responsibility for the services provided and aligns the Estate’s expectations of service delivery with the capabilities and operational parameters of the AUNG ONE platform.</p>

          <p>For the avoidance of doubt, AUNG provides the technology platform and related services solely as a technology service provider and shall not be responsible for the Estate’s internal governance policies, enforcement decisions, resident conduct, or regulatory compliance obligations, except where expressly stated in this Agreement.</p>

          <h3>3. Roles & Responsibilities</h3>

          <h3>3.1 Responsibilities of AUNG Solutions Nigeria Limited (“AUNG”)</h3>

          <p>Subject to the terms of this Agreement and the Estate’s continued compliance with all payment and usage obligations, AUNG shall be responsible for the following:</p>

          <h3>3.1 Platform Provision</h3>

          <p>Provide the Estate with access to the AUNG ONE platform in accordance with the selected service plan, including functionality for payment processing, subscription management, visitor access authorization, reporting, and related estate operational workflows.</p>

          <h3>3.2 Platform Maintenance & Updates</h3>

          <p>Maintain, support, and periodically update the AUNG ONE platform to ensure operational stability, security enhancements, and feature improvements, subject to scheduled maintenance, upgrades, and service interruptions reasonably required for system management.</p>

          <h3>3.3 Technical Support</h3>

          <p>Provide reasonable technical support for platform-related issues in accordance with AUNG’s support procedures, service hours, and response standards as may be communicated from time to time.</p>

          <h3>3.4 Data Hosting, Security & Privacy Protection (NDPA-Aligned)</h3>

          <p>AUNG shall host and manage the AUNG ONE platform infrastructure using commercially reasonable administrative, technical, and organizational safeguards designed to protect the integrity, confidentiality, and availability of data processed on the platform, in line with industry standards and the Nigeria Data Protection Act (NDPA).</p>

          <p>For the purposes of this Agreement:</p>

          <p> The Estate shall act as the Data Controller in respect of resident and estate data processed through the platform.<br>
           AUNG shall act as a Data Processor, processing such data solely in accordance with this Agreement and the Estate’s lawful instructions.</p>

          <p>AUNG shall take reasonable steps to protect the personal data of residents, visitors, and users against unauthorized access, loss, misuse, alteration, or unlawful disclosure, and shall ensure that personnel or service providers with access to such data are subject to appropriate confidentiality obligations.</p>

          <p>Personal data processed through the platform shall be used solely for the purposes of:</p>

          <p> operating, maintaining, and improving the AUNG ONE platform;<br>
           fulfilling contractual obligations under this Agreement; and<br>
           complying with applicable legal or regulatory requirements.</p>

          <p>AUNG shall not disclose personal data to third parties except:</p>

          <p> where reasonably required for platform infrastructure or service provision;<br>
           where required by law, court order, or regulatory authority; or<br>
           with the lawful authorization of the Estate or relevant data subject.</p>

          <p>The Estate acknowledges that while AUNG implements industry-standard security measures, no electronic system can guarantee absolute security, and AUNG shall not be liable for data incidents arising from circumstances beyond its reasonable control, including internet failures, third-party infrastructure vulnerabilities, or force majeure events.</p>

          <p>Nothing in this Agreement shall transfer ownership of personal data to AUNG. All data rights remain with the Estate and/or the relevant data subjects, subject only to AUNG’s limited right to process such data for the purposes described herein.</p>

          <h3>3.5 Access Enablement Logic</h3>

          <p>Implement system-based rules within the platform that enable or restrict resident and estate access features, including visitor access code generation and service personnel authorization based on payment compliance and system configurations established by the Estate.</p>

          <h3>3.6 Service Enforcement Rights</h3>

          <p>AUNG reserves the right to restrict, suspend, or terminate access to any part of the AUNG ONE platform where payment default, misuse, breach of this Agreement, or security risks arise.</p>

          <h3>3.2 Responsibilities of the Estate / Client</h3>

          <p>The Estate shall be solely responsible for the following obligations:</p>

          <h3>3.7 Payment Obligations and Consequences of Default</h3>

          <p>The Estate shall ensure the timely and full payment of all applicable fees under this Agreement, including but not limited to:</p>

          <p> transaction fees<br>
           service fees<br>
           licensing fees<br>
           maintenance and support fees<br>
           resident access enablement fees</p>

          <p>All payments shall be made in the amounts and within the timelines communicated by AUNG from time to time.</p>

          <p>In the event of delay, default, or failure to pay any amount due, AUNG may exercise one or more of the following rights without prejudice to any other remedies available under this Agreement or applicable law:</p>

          <p>a. Late Payment Charges<br>
          Apply reasonable late payment charges or administrative fees on outstanding amounts at rates determined and communicated by AUNG.</p>

          <p>b. Restriction of Platform Features<br>
          Restrict or disable access to certain platform functions, including but not limited to:<br>
           visitor access code generation<br>
           service personnel access authorization<br>
           dashboards and reporting tools<br>
           analytics and administrative controls until outstanding amounts are settled.</p>

          <p>c. Suspension of Services<br>
          Suspend access to part or all of the AUNG ONE platform where payment default continues beyond a reasonable grace period.</p>

          <p>d. Termination for Persistent Default<br>
          Terminate this Agreement upon written notice where payment default continues after prior notification or where such default materially affects AUNG’s operations.</p>

          <p>e. Recovery of Outstanding Amounts<br>
          Pursue recovery of all outstanding fees, including reasonable administrative or legal costs incurred in enforcing payment obligations.</p>

          <p>The Estate acknowledges that continued access to the AUNG ONE platform is conditional upon payment compliance, and that any restrictions or suspensions imposed under this clause may be lifted upon full settlement of outstanding obligations, subject to system processing timelines.</p>

          <h3>3.8 Resident Communication & Enforcement</h3>

          <p>The Estate shall communicate the rules, fees, policies, and operational requirements of the AUNG ONE platform to residents and shall be responsible for enforcing compliance within the Estate, including matters relating to payment obligations, access restrictions, and service eligibility.</p>


           <h3>4. Service Availability & Uptime</h3>
<p>AUNG shall use commercially reasonable efforts to make the AUNG ONE platform available to the Estate on a continuous basis, subject to scheduled maintenance, system upgrades, and circumstances beyond AUNG’s reasonable control.</p>

<p>The Estate acknowledges that the AUNG ONE platform is provided on an “as available” and “as is” basis, and AUNG does not guarantee uninterrupted, error-free, or continuous operation of the platform.</p>

<p>AUNG shall not be liable for temporary interruptions, delays, or performance issues arising from, including but not limited to:</p>

<p>• scheduled or emergency system maintenance or upgrades;<br>
• internet connectivity failures or network disruptions;<br>
• services or infrastructure provided by third-party providers;<br>
• hardware, device, or network issues at the Estate’s premises; or<br>
• force majeure events or other circumstances beyond AUNG’s reasonable control.</p>

<p>AUNG reserves the right to perform scheduled maintenance, system upgrades, or security updates that may temporarily affect platform availability. Where reasonably practicable, AUNG shall provide prior notice of such maintenance to the Estate.</p>

<p>The Estate agrees that temporary interruptions or service degradation shall not constitute a breach of this Agreement, and shall not entitle the Estate to refunds, credits, compensation, or damages.</p>

<p>Notwithstanding the foregoing, AUNG shall take commercially reasonable steps to restore platform availability within a reasonable timeframe following any material service disruption.</p>


<h3>5. Fees, Billing & Payment Enforcement</h3>

<h3>5.1 Fees Payable</h3>
<p>The Estate agrees to pay all fees applicable to its use of the AUNG ONE platform in accordance with the selected service plan and as communicated by AUNG from time to time. Such fees may include, without limitation:</p>

<p>• transaction and service fees applicable to payments processed through the platform;<br>
• one-time licensing fees (where applicable);<br>
• annual maintenance and support fees (where applicable);<br>
• the mandatory ₦20,000 annual resident access enablement fee; and<br>
• any other fees or charges expressly agreed under this Agreement.</p>

<p>All fees are exclusive of applicable taxes, levies, or statutory charges, which shall be borne by the Estate.</p>


<h3>5.2 Billing & Payment Terms</h3>
<p>AUNG may bill applicable fees through system-generated invoices, electronic notices, platform statements, or automatic deductions.</p>

<p>Unless otherwise stated:</p>

<p>• invoiced amounts shall be payable within the payment period specified by AUNG; and<br>
• transaction-based fees may be automatically deducted at the point of payment processing.</p>

<p>Failure by the Estate to dispute any invoice or charge within a reasonable period after issuance shall be deemed acceptance of such charges.</p>


<h3>5.3 Late Payment, Grace Period & Enforcement</h3>
<p>Failure to pay any amount due under this Agreement shall constitute a payment default.</p>

<p>At its discretion, AUNG may grant the Estate a grace period of up to forty-five (45) days from the original due date to settle outstanding payments.</p>

<p>Where payment remains outstanding after the expiration of the grace period, all unpaid amounts shall become immediately due and payable and must be settled through bank transfer or other approved electronic payment method designated by AUNG.</p>

<p>Without prejudice to any other rights available under this Agreement or applicable law, AUNG may implement one or more of the following measures:</p>

<p><strong>a. Late Payment Charges</strong><br>
AUNG may apply late payment charges, interest, or administrative fees on any outstanding amounts at a rate of 1.5% per month, or such other rate as may be determined and communicated by AUNG from time to time, until the outstanding amount is fully settled.</p>

<p><strong>b. Restriction of Platform Features</strong><br>
Restrict or disable certain platform features, including but not limited to:<br>
• visitor access code generation;<br>
• service personnel access authorization;<br>
• administrative dashboards and analytics;<br>
• reporting and system controls.</p>

<p><strong>c. Suspension of Services</strong><br>
Suspend access to part or all of the AUNG ONE platform where payment default continues beyond the applicable grace period.</p>

<p><strong>d. Termination for Persistent Default</strong><br>
Terminate this Agreement upon written notice where payment default persists or materially affects AUNG’s operations or revenue.</p>

<p><strong>e. Recovery of Outstanding Amounts</strong><br>
Pursue recovery of all outstanding fees, together with reasonable administrative or legal costs incurred in enforcing payment obligations, where permitted by law.</p>


<h3>5.4 No Waiver</h3>
<p>Any delay or failure by AUNG to enforce payment obligations or exercise its rights under this clause shall not constitute a waiver of such rights, and AUNG may enforce them at any time.</p>


<h3>5.5 Conditional Platform Access</h3>
<p>The Estate acknowledges that continued access to and use of the AUNG ONE platform is conditional upon payment compliance.</p>

<p>Any restrictions, suspensions, or enforcement actions implemented under this Agreement shall be lifted only upon full settlement of all outstanding amounts, subject to system processing timelines.</p>


<h3>6. Fees & Payment Obligations</h3>

<h3>6.1 Applicable Fees</h3>
<p>The Estate agrees to pay all fees applicable to its selected service plan as set out below, or as otherwise communicated by AUNG Solutions Nigeria Limited (“AUNG”) from time to time.</p>

<p><strong>Easy Pay (Pay-As-You-Go Plan)</strong><br>
• 12.5% transaction fee charged on every successful payment processed through the platform; and<br>
• ₦20,000 annual resident access enablement fee, mandatory for the activation and continued use of visitor access code generation and related access control features.</p>

<p><strong>White-Label SaaS Licensing Plan:</strong><br>
• One-time licensing fee ranging between ₦5,000,000 and ₦10,000,000, depending on estate size, system configuration, and feature scope;<br>
• Annual maintenance and support fee equivalent to 25% – 30% of the applicable licensing fee, payable annually;<br>
• Service fee of 8.5% on all transactions processed through the platform; and<br>
• ₦20,000 annual resident access enablement fee, mandatory for the activation and continued use of access-related platform functionality.</p>

<p>All fees stated under this Agreement are exclusive of applicable taxes, levies, or statutory charges, which shall be borne by the Estate.</p>


<h3>6.2 Fee Adjustments</h3>
<p>The Estate acknowledges that the fees, charges, and pricing structures set out in this Agreement may be reviewed and adjusted by AUNG from time to time.</p>

<p>AUNG reserves the right to revise applicable fees where such adjustment becomes necessary due to factors including, but not limited to:</p>

<p>• the introduction or enhancement of new platform features, modules, or services;<br>
• changes in operational, infrastructure, hosting, or cybersecurity costs;<br>
• fluctuations in foreign exchange rates or currency valuation;<br>
• inflationary pressures or broader economic conditions;<br>
• regulatory, compliance, or statutory changes;<br>
• integration with third-party systems, services, or hardware; or<br>
• any other circumstances that materially affect the cost, scope, or sustainability of service delivery.</p>

<p>Where reasonably practicable, AUNG shall provide the Estate with prior notice of any material fee adjustment. Continued use of the AUNG ONE platform after the effective date of such adjustment shall constitute acceptance of the revised pricing.</p>


<h3>6.3 Non-Refundability</h3>
<p>All fees payable under this Agreement, whether one-time, recurring, transaction-based, or access-related, are non-refundable.</p>

<p>This includes fees paid in connection with platform licensing, maintenance, transaction processing, resident access enablement, or any other services provided under this Agreement, including circumstances where access to the platform is restricted, suspended, or terminated as a result of the Estate’s default, breach, or non-compliance.</p>


<h3>7. Intellectual Property Rights</h3>

<p>For the purposes of this Agreement, “Intellectual Property Rights” shall include all present and future rights relating to patents, inventions, copyrights, trademarks, service marks, business names, logos, domain names, design rights, software (including source code and object code), databases, proprietary algorithms, system architecture, workflows, documentation, trade secrets, confidential information, know-how, and all other intellectual property rights, whether registered or unregistered, including all renewals, extensions, and similar rights existing now or in the future in any jurisdiction worldwide.</p>

<p>All Intellectual Property Rights in and to the AUNG ONE platform, including but not limited to its software, source code, system architecture, algorithms, workflows, interfaces, documentation, trademarks, branding, and related materials, are and shall remain the exclusive property of AUNG Solutions Nigeria Limited (“AUNG”).</p>

<p>The Estate acknowledges and agrees that the AUNG ONE platform is provided strictly on a license basis. Nothing in this Agreement shall operate to transfer, assign, sublicense, or otherwise convey any ownership, title, or proprietary interest in the platform or its Intellectual Property Rights to the Estate or any third party.</p>

<p>Except as expressly permitted under this Agreement, the Estate shall not, and shall not permit any third party to:</p>

<p>• copy, reproduce, modify, or create derivative works from the platform;<br>
• reverse engineer, decompile, disassemble, or attempt to access the underlying source code;<br>
• distribute, sublicense, resell, or commercially exploit any part of the platform; or<br>
• develop or attempt to develop any system or solution derived from or substantially similar to the AUNG ONE platform.</p>

<p>The Estate further agrees not to take, or permit any action that may challenge, dilute, or adversely affect AUNG’s ownership or control of the Intellectual Property Rights, including any attempt to register or claim ownership of similar or confusingly similar systems, trademarks, or technologies.</p>

<p>For the avoidance of doubt, use of the AUNG ONE platform shall not be construed as a sale, transfer, inheritance, or acquisition of any Intellectual Property Rights by the Estate, its residents, agents, successors, or assigns. All rights not expressly granted under this Agreement are reserved exclusively to AUNG Solutions Nigeria Limited.</p>


<h3>8. End-User Obligations, Access Control & Platform Protection</h3>

<h3>8.1 End-User Status</h3>
<p>For the purposes of this Agreement, “End Users” include residents, occupants, visitors, service personnel, and any individual granted access to the AUNG ONE platform through the Estate.</p>

<p>End Users acknowledge that access to certain platform features, including visitor access code generation, resident access authorization, and related functions, is subject to compliance with applicable fees, system rules, and estate policies configured within the AUNG ONE platform.</p>


<h3>8.2 Payment-Linked Access Restriction</h3>
<p>Where an End User defaults in the payment of any applicable fees, including but not limited to the ₦20,000 annual resident access enablement fee, the AUNG ONE system may automatically restrict the End User’s ability to generate or use access codes.</p>

<p>In such circumstances:</p>

<p>• the End User shall be unable to generate visitor or personal access codes; and<br>
• where estate entry or exit requires a valid access code, the End User may be unable to independently access or leave the Estate until payment compliance is restored.</p>

<p>Access privileges shall be automatically reinstated upon confirmation of payment, subject to system processing timelines.</p>

<p>The End User acknowledges that such restriction is a system-based consequence of non-payment and not a penalty imposed by AUNG.</p>


<h3>8.3 Prohibited Circumvention or Misuse</h3>
<p>End Users shall not:</p>

<p>• attempt to bypass, manipulate, or override platform access controls;<br>
• share, duplicate, sell, or misuse access codes;<br>
• use another person’s credentials without authorization; or<br>
• interfere with platform operations, data integrity, or security systems.</p>

<p>Any such actions may result in immediate suspension or restriction of platform access, without prejudice to enforcement measures taken by the Estate under its internal policies.</p>


<h3>8.4 Platform Role & Limitation of Responsibility</h3>
<p>End Users acknowledge that AUNG provides the AUNG ONE platform solely as a technology service provider.</p>

<p>Accordingly:</p>

<p>• AUNG does not control estate gates, security personnel, or physical access enforcement;<br>
• AUNG does not determine estate policies regarding entry, exit, or access privileges; and<br>
• AUNG shall not be liable for any inconvenience, delay, or restriction resulting from non-payment, estate policies, or end-user misuse of the platform.</p>


<h3>8.5 End-User Responsibility</h3>
<p>End Users remain solely responsible for:</p>

<p>• complying with estate rules and payment obligations;<br>
• lawful and appropriate use of the platform; and<br>
• any consequences arising from their own default, misuse, or misconduct.</p>

<p>Any disputes between residents and the Estate relating to payments, access restrictions, or estate policies shall be resolved directly between the resident and the Estate and shall not involve AUNG.</p>


<h3>8.6 Platform Protection Rights</h3>
<p>AUNG reserves the right to:</p>

<p>• monitor platform activity to detect misuse, fraud, or security threats;<br>
• restrict, suspend, or disable access where misuse or risk is detected; and<br>
• take any reasonable action necessary to protect the security, integrity, and reputation of the AUNG ONE platform.</p>

<p>Nothing in this clause shall create a direct contractual relationship between AUNG and individual End Users, whose access to the platform remains subject to authorization by the Estate.</p>


<h3>9. Platform Exclusivity</h3>
<p>During the term of this Agreement, the Estate agrees that the AUNG ONE platform and related services shall serve as the exclusive system used within the Estate for digital payment structuring, resident subscription management, access code generation, visitor and service personnel authorization, access logging, and other related community operational services covered under this Agreement.</p>

<p>Accordingly, the Estate shall not, directly or indirectly, enter into, maintain, or participate in any agreement or arrangement with any third party that provides services that are the same as or substantially similar to those provided by the AUNG ONE platform, including alternative digital systems for estate payments, subscription management, or access control.</p>

<p>The Estate further agrees not to deploy, operate, or permit any parallel, competing, or substitute systems that replicate, replace, or materially undermine the functionality, purpose, or commercial value of the AUNG ONE platform while this Agreement remains in force.</p>

<p>Nothing in this clause shall prevent the Estate from using internal manual processes or administrative tools for purposes not covered by the AUNG ONE platform, provided that such processes do not conflict with or materially impair the operation or exclusivity of the services provided by AUNG.</p>

<p>Any breach of this clause shall constitute a material breach of this Agreement, entitling AUNG, without prejudice to any other rights or remedies available under this Agreement or applicable law, to:</p>

<p>• suspend or restrict access to the platform;<br>
• terminate this Agreement upon written notice; and/or<br>
• pursue any other remedies available at law or in equity.</p>


<h3>10. Non-Circumvention</h3>
<p>The Estate agrees that, during the term of this Agreement and for so long as it continues to receive services from AUNG Solutions Nigeria Limited (“AUNG”), it shall not, directly or indirectly, take any action intended to circumvent, bypass, undermine, or avoid the use, fees, enforcement mechanisms, or commercial structure of the AUNG ONE platform.</p>

<p>Without limitation, the Estate shall not:</p>

<p>10.1 implement or permit the use of alternative systems, manual processes, or third-party tools designed to replicate, replace, or bypass the payment structuring, subscription management, access code generation, or enforcement functionality of the AUNG ONE platform;<br>
10.2 redirect payments, access authorization processes, or operational workflows outside the AUNG ONE platform in a manner intended to avoid applicable platform fees, service charges, or access enablement requirements;<br>
10.3 encourage, authorize, or permit residents, vendors, security personnel, or other third parties to bypass platform controls, restrictions, or enforcement mechanisms;<br>
10.4 deploy, integrate, or allow the operation of any competing or substitute platform performing substantially similar functions to the AUNG ONE platform within the Estate; or<br>
10.5 take any action that materially diminishes the commercial value, operational effectiveness, or enforcement capability of the AUNG ONE platform.</p>

<p>The Estate acknowledges that any act of circumvention shall constitute a material breach of this Agreement.</p>

<p>In the event of such breach, AUNG shall be entitled, without prejudice to any other rights or remedies available under this Agreement or applicable law, to:</p>

<p>• immediately restrict or suspend access to the AUNG ONE platform;<br>
• terminate this Agreement upon written notice; and/or<br>
• seek appropriate remedies, including injunctive relief and recovery of damages where applicable.</p>

<p>This non-circumvention clause shall survive the suspension or termination of this Agreement to the extent necessary to protect AUNG’s commercial interests and enforce its rights.</p>

<h3>11. Confidentiality & Non-Disclosure</h3>
<p>Each Party agrees to keep confidential all Confidential Information disclosed, made available, observed, accessed, or otherwise obtained in connection with this Agreement, and to use such information solely for the purpose of performing its obligations under this Agreement.</p>
<p>For the purposes of this Agreement, “Confidential Information” includes, without limitation, all non-public information relating to the AUNG ONE platform, including its software, system architecture, algorithms, security mechanisms, pricing structures, service fees, business processes, technical documentation, data, trade secrets, and any other information designated as confidential or which reasonably ought to be regarded as confidential.</p>
<p>The Estate shall not disclose, publish, or make available any Confidential Information of AUNG to any third party without the prior written consent of AUNG, except where disclosure is required by applicable law, court order, or regulatory authority, provided that the Estate gives reasonable prior notice to AUNG, where legally permissible.</p>
<p>Each Party shall take reasonable measures to safeguard Confidential Information against unauthorized disclosure, access, or misuse.</p>
<p>The obligations under this clause shall survive the termination or expiration of this Agreement for so long as the information remains confidential.</p>

<h3>12. Prohibited Uses</h3>
<p>The Estate shall not, and shall ensure that its residents, agents, employees, contractors, and end users do not use the AUNG ONE platform for any unlawful, fraudulent, or unauthorized purpose.</p>
<p>a. use the platform for unlawful, fraudulent, or unauthorized purposes.</p>
<p>b. copy, modify, reverse engineer, decompile, disassemble, or create derivative works from the platform.</p>
<p>c. bypass, disable, interfere with, or attempt to circumvent platform security controls, payment enforcement mechanisms, access restrictions, or monitoring systems.</p>
<p>d. share, resell, sublicense, or commercially exploit the platform or disclose access credentials without prior written consent.</p>
<p>e. introduce malware, malicious code, or harmful scripts that may compromise the platform.</p>
<p>f. use the platform in a manner that causes legal, operational, or reputational harm to AUNG.</p>
<p>Any violation of this clause constitutes a material breach and may result in immediate suspension or termination of access, without prejudice to other remedies.</p>

<h3>13. Audit & Compliance Rights</h3>
<p>AUNG reserves the right, upon reasonable prior notice and during normal business hours, to audit or verify the Estate’s use of the platform to confirm compliance with this Agreement.</p>
<p>This includes verification of payments, access enablement, exclusivity obligations, and non-circumvention provisions.</p>
<p>Verification may involve review of system logs, transaction records, and related documentation.</p>
<p>Where non-compliance is identified, the Estate shall promptly remedy the breach and pay all outstanding amounts, including reasonable audit costs where permitted by law.</p>
<p>AUNG is not required to disclose proprietary source code or confidential system architecture except where necessary for compliance verification.</p>

<h3>14. Survival of Intellectual Property & Payment Obligations</h3>
<p>Provisions relating to Intellectual Property Rights, Confidentiality, Fees and Payment Obligations, Non-Circumvention, Limitation of Liability, and Indemnity shall survive termination or expiration of this Agreement.</p>
<p>These provisions remain binding for as long as necessary to give full effect to their purpose.</p>
<p>Termination does not affect AUNG’s right to recover outstanding fees, charges, penalties, or damages.</p>

<h3>15. Indemnity</h3>
<p>The Estate agrees to indemnify, defend, and hold harmless AUNG Solutions Nigeria Limited and its representatives from all claims, losses, damages, liabilities, and expenses arising from use of the platform.</p>
<p>15.1 Use or misuse of the platform by the Estate or its users.</p>
<p>15.2 Breach of this Agreement, including payment, exclusivity, or confidentiality obligations.</p>
<p>15.3 Disputes involving residents, visitors, vendors, or third parties.</p>
<p>15.4 Violations of applicable laws or estate regulations.</p>
<p>15.5 Data or content that infringes third-party rights.</p>
<p>15.6 Any act exposing AUNG to legal or reputational risk.</p>
<p>This obligation survives termination and excludes claims arising solely from AUNG’s fraud or willful misconduct.</p>

<h3>16. Termination</h3>

<h3>16.1 Termination with Notice</h3>
<p>Either Party may terminate this Agreement with at least three (3) months’ written notice.</p>
<p>The notice period allows for transition, settlement of obligations, and operational continuity.</p>
<p>All obligations, including payment, remain in effect during this period.</p>

<h3>16.2 Termination for Breach or Non-Payment</h3>
<p>AUNG may terminate immediately where the Estate fails to pay fees, commits a material breach, or compromises platform integrity.</p>
<p>AUNG shall not be liable for any resulting disruption.</p>

<h3>16.3 Effect of Termination</h3>
<p>a. Access to the platform ceases immediately.</p>
<p>b. AUNG may suspend or disable services.</p>
<p>c. All outstanding obligations become immediately due.</p>
<p>d. The Estate must cease platform use except for limited transition purposes.</p>

<h3>16.4 Survival of Obligations</h3>
<p>Termination does not affect accrued payment obligations or survival clauses, including intellectual property, confidentiality, indemnity, and dispute resolution.</p>

<h3>16.5 No Waiver</h3>
<p>Termination does not waive any rights or remedies available to AUNG.</p>

<h3>17. Force Majeure</h3>
<p>Neither Party is liable for delays caused by events beyond reasonable control, including natural disasters, war, cyberattacks, or infrastructure failures.</p>
<p>The affected Party must notify the other and take steps to resume performance.</p>
<p>AUNG may suspend or terminate services if such events persist.</p>
<p>Payment obligations remain unaffected.</p>

<h3>18. Dispute Resolution & Arbitration</h3>

<h3>18.1 Amicable Resolution</h3>
<p>Parties shall attempt to resolve disputes through good-faith negotiations within thirty (30) days.</p>

<h3>18.2 Arbitration</h3>
<p>Unresolved disputes shall be referred to arbitration under Nigerian law.</p>
<p>a. Governed by the Arbitration and Mediation Act, 2023.</p>
<p>b. Conducted by a single arbitrator.</p>
<p>c. Venue: Lagos State, Nigeria.</p>
<p>d. Language: English.</p>
<p>The decision is final and binding.</p>

<h3>18.3 Interim Relief</h3>
<p>AUNG may seek injunctive or equitable relief from courts where necessary.</p>

<h3>18.4 Costs</h3>
<p>Each Party bears its own legal costs unless otherwise determined, while arbitration costs are shared.</p>

<h3>19. Assignment & Change of Control</h3>

<h3>19.1 Assignment by the Estate</h3>
<p>The Estate may not assign or transfer this Agreement without AUNG’s written consent.</p>
<p>Unauthorized assignment is void and constitutes a breach.</p>

<h3>19.2 Change of Control</h3>
<p>The Estate must notify AUNG of any ownership or management changes, including mergers, transfers, or new management.</p>
<p>AUNG may review, revise terms, or terminate the Agreement following such changes.</p>

<h3>19.3 Assignment by AUNG</h3>
<p>AUNG may assign this Agreement to affiliates, successors, or investors.</p>
<p>Notice will be provided, provided the Estate’s rights are not materially diminished.</p>

<h3>20. Notices</h3>
<p><strong>20.1 Form of Notices</strong><br>
Any notice, demand, consent, approval, request, or other communication required or permitted under this Agreement (each a “Notice”) shall be made electronically and shall be deemed validly given if transmitted through any of the following means:<br>
a. electronic mail (email);<br>
b. in-platform notifications, messages, alerts, or announcements issued through the AUNG ONE platform; or<br>
c. any other electronic communication method designated by AUNG Solutions Nigeria Limited (“AUNG”) from time to time,<br>
provided that no delivery failure notification is received.
</p>

<p><strong>20.2 Electronic Addresses for Notices</strong><br>
Notices shall be sent or delivered electronically to the contact details associated with the Parties’ respective accounts on the AUNG ONE platform, or to such other electronic contact details as either Party may update through the platform or notify in writing.<br>
For the purposes of this Agreement:<br>
Notices to AUNG shall be sent to:<br>
Email: info@aungsolutions.com<br>
or such other official electronic contact address as AUNG may designate through the platform.<br>
Notices to the Estate shall be sent to the official email address, platform account, or other electronic contact details provided by the Estate during onboarding or subsequently updated on the AUNG ONE platform.
</p>

<p><strong>20.3 Deemed Receipt</strong><br>
A Notice shall be deemed received:<br>
a. in the case of email, at the date and time of transmission, provided that no delivery failure notification is received; or<br>
b. in the case of an in-platform notification, at the time such notice is posted, delivered, or made available on the Estate’s account dashboard within the AUNG ONE platform.
</p>

<h3>21. Regulatory Position</h3>
<p>
The Parties acknowledge and agree that AUNG ONE operates as a community transaction and access management platform designed for use within residential estates, gated communities, and other organized properties.<br>
AUNG ONE is intended to facilitate structured community payments, access authorization, and operational workflows within closed or semi-closed environments, and does not operate as a public financial intermediary, bank, payment institution, or deposit-taking entity.
</p>
<p>
Accordingly, AUNG does not provide regulated financial services to the general public through the AUNG ONE platform.<br>
The Estate shall remain solely responsible for its internal governance, resident communications, payment enforcement policies, and compliance with applicable laws, regulations, and statutory requirements relevant to its operations.<br>
Nothing in this Agreement shall be construed as creating, transferring, or imposing any regulatory responsibility on AUNG beyond those expressly required by applicable law.
</p>

<h3>22. Governing Law and Jurisdiction</h3>
<p>
This Agreement shall be governed by and construed in accordance with the laws of the Federal Republic of Nigeria.<br>
Subject to the dispute resolution and arbitration provisions contained in this Agreement, the Parties hereby submit to the jurisdiction of the Federal High Court sitting in Lagos State, Nigeria, in respect of any matter requiring judicial intervention, including the enforcement of arbitral awards, interim relief, or any proceedings permitted under applicable law.
</p>

<h3>23. Entire Agreement</h3>
<p>
This Agreement constitutes the entire agreement between the Parties with respect to its subject matter and supersedes all prior or contemporaneous agreements, understandings, negotiations, representations, or communications, whether written or oral.<br>
No amendment, variation, or modification of this Agreement shall be valid unless made in writing and communicated through the AUNG ONE platform or otherwise issued by AUNG in an authorized electronic form.<br>
The Estate’s continued use of the AUNG ONE platform following the publication or communication of any such amendment shall constitute acceptance of the revised terms, unless otherwise expressly agreed in writing.
</p>

<h3>24. Limitation of Liability</h3>
<p>
To the fullest extent permitted by applicable law, AUNG Solutions Nigeria Limited shall not be liable for any indirect, incidental, consequential, special, or punitive damages, including loss of profits, loss of revenue, loss of data, loss of business opportunity, or reputational damage arising out of or in connection with the use of the AUNG ONE platform.<br>
In no event shall AUNG’s total aggregate liability arising under or in connection with this Agreement exceed the total amount of fees paid by the Estate to AUNG during the twelve (12) months preceding the event giving rise to the claim.<br>
Nothing in this clause shall limit liability arising from fraud or willful misconduct, to the extent prohibited by applicable law.
</p>

<h3>25. Independent Contractor Relationship</h3>
<p>
Nothing in this Agreement shall be deemed to create any partnership, joint venture, agency, employment, or fiduciary relationship between AUNG and the Estate.<br>
AUNG provides the AUNG ONE platform solely as a technology service provider, and the Estate remains solely responsible for its governance, operations, policies, security decisions, and compliance obligations.<br>
Neither Party shall have authority to bind or represent the other Party in any manner unless expressly authorized in writing.
</p>

<h3>26. Severability</h3>
<p>
If any provision of this Agreement is determined by a court or tribunal of competent jurisdiction to be invalid, illegal, or unenforceable, such provision shall be deemed modified to the minimum extent necessary to make it enforceable.<br>
If such modification is not possible, the affected provision shall be severed from this Agreement, and the remaining provisions shall continue in full force and effect.
</p>

<h3>Electronic Acceptance & Execution</h3>
<p>
BY TICKING THE “I AGREE” OR “ACCEPT TERMS AND CONDITIONS” CHECKBOX ON THE AUNG ONE PLATFORM, THE ESTATE CONFIRMS THAT IT HAS READ, UNDERSTOOD, AND AGREES TO BE LEGALLY BOUND BY THE TERMS AND CONDITIONS OF THIS AGREEMENT.
</p>
<p>
The Parties expressly agree that:<br>
a. ticking the acceptance checkbox, clicking an acceptance button, or otherwise electronically indicating assent on the AUNG ONE platform shall constitute valid execution and acceptance of this Agreement by the Estate;<br>
b. such electronic acceptance shall have the same legal force and effect as a handwritten signature or physical execution of this Agreement;<br>
c. no physical signature, seal, or witness shall be required for the validity or enforceability of this Agreement;<br>
d. the individual accepting this Agreement on behalf of the Estate represents and warrants that he or she has full authority to bind the Estate to the terms of this Agreement; and<br>
e. any system-generated, electronically stored, or digitally recorded copy of this Agreement, together with records evidencing electronic acceptance, shall constitute conclusive evidence of execution and shall be admissible in any legal, regulatory, or administrative proceedings.
</p>
<p>
This Agreement shall be deemed executed and effective at the date and time the acceptance checkbox is selected by or on behalf of the Estate on the AUNG ONE platform.
</p>
            
        </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>      
@endsection
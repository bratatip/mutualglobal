@extends('mutualglobal.landing-page.layouts.master')


@section('title', 'Home - Mutual Global Pvt Ltd')


@section('content')
    <!-- About Us -->
    <div class="py-20 relative">
        <!-- Pseudo-element with Background Image and Opacity -->
        <div class="absolute inset-0 -top-20 bg-contain bg-center bg-no-repeat bg-fixed"
             style="background-image: url('{{ asset('images/landing-page/app/about/hero.png') }}'); opacity: 0.1;"></div>

        <!-- Container with Content -->
        <div class="flex-col items-center text-center px-12 md:px-36 relative z-10">
            <h2 class="text-2xl md:text-4xl font-bold mb-2 text-neutral-700">ABOUT US</h2>
            <h5 class="text-[12px] md:text-sm mb-8 text-neutral-900">Every client matters to us and this is constantly
                reflecting in the
                service we offer in most possible way. Our considerable experience within various sectors enables us to
                design and implement the most appropriate insurance solution on behalf of our clients; that’s Innovation.
                The values upon which Mutual Global has been established, guide our daily operations and ensure that we
                remain attentive to the requirements of our clients at all times. We are regulated by the IRDA and
                associated with Insurance Companies and adhere to their core standard of Treating Customers Fairly. We are
                passionate and driven to succeed for our clients both Corporate and Retail. Only through our desire to make
                life easier for our clients and help them to avoid financial difficulty. We seek out protection that will
                serve them well. We hope to meet all of our clients in person so we can fully understand any challenges they
                face and source outstanding risk solutions, that’s Customer Centric attitude.</h5>
        </div>
    </div>


    <!-- Features -->
    <section class="container mx-auto px-6 p-10">
        <div class="px-10">
            <h2 class="text-4xl font-bold text-center text-gray-800 mb-8">Services</h2>
            <!-- General Insurance Placement -->
            <div class="flex relative items-center text-center flex-wrap mb-28">
                <div class="w-full md:w-1/2">
                    <h4 class="text-2xl md:text-3xl text-gray-800 font-bold mb-3">General Insurance Placement</h4>
                    <p class="text-gray-600 mb-8">We deal with all kind of General insurance Products With analyzing the
                        proposal, we procure quotes from various Insurance Companies and help client to Place the Insurance
                        portfolio.</p>
                </div>
                <div class="w-full md:w-1/2 absolute md:static z-10">
                    <img class="rounded-lg opacity-15 md:opacity-100"
                         src="{{ asset('images/landing-page/app/about/gen-ins.png') }}">
                </div>
            </div>
        </div>
        <!-- Claims Management -->
        <div class="flex relative items-center flex-wrap mb-20">
            <div class="w-full md:w-1/2 absolute md:static z-10">
                <img class="rounded-lg opacity-15 md:opacity-100"
                     src="{{ asset('images/landing-page/app/about/claims-management.png') }}"
                     alt="use the force">
            </div>

            <div class="w-full md:w-1/2 px-5 z-20">
                <div class="text-center">
                    <h4 class="text-2xl md:text-3xl text-gray-800 font-bold mb-3">Claims Management</h4>
                </div>
                <div class="overflow-y-auto px-5 max-h-96 mt-5">
                    <div class="mb-8 text-center">
                        <p class="text-gray-600 mb-8">
                            Claims Management involves all the job starting right from claims intimation till the claims
                            settlement as per underwritten policy terms.
                            There are four major steps that have to be carried out in order to service a claim, and one of
                            which
                            is claims management.
                            Following are the steps that are carried out while servicing a claim.
                        </p>
                    </div>

                    <div class="mb-8">
                        <h1 class="font-bold text-gray-500">Claim Management Process</h1>
                        <ol class="list-decimal px-8">
                            <li>Claims Intimation</li>
                            <li>Claim Management</li>
                            <li>Claim Settlement/rejection</li>
                            <li>Claim Recovery process</li>
                        </ol>
                        <p>
                            As a broker, we are actively engaged and support the Insurers in all the above steps in order to
                            take care of the Insured’s interest.
                        </p>
                    </div>

                    <div class="mb-8">
                        <h1 class="font-bold text-gray-500">Claims Intimation Process</h1>
                        <ol class="list-decimal px-8">
                            <li>Insured must be made aware of the claim process guidelines by the broker</li>
                            <li>Broker should obtain and review claims information from the Insured</li>
                            <li>
                                Insurer’s claims team will access policy information of the Insured and check the policy
                                coverage.
                                Insurer will appoint a surveyor and share the Policy document and other details with the
                                surveyor wherever required.
                                Post which Claims reserve will be set up by the Insurer.
                            </li>
                        </ol>
                    </div>

                    <div class="mb-8">
                        <h1 class="font-bold text-gray-500">Claim Management Process</h1>
                        <ol class="list-decimal px-8">
                            <li>Insurer will follow up with the surveyor for the report</li>
                            <li>Brokers/Insurer will obtain all the supporting documents from the Insured as required by the
                                surveyor</li>
                            <li>
                                Based on the documents collected, the claim reserve will be adjusted by the Insurer and
                                salvage
                                if any will be disposed.
                            </li>
                            <li>Reinsurers will be intimated on the claims, and an appropriate portion of claims will be
                                recovered from the Reinsurer.</li>
                        </ol>
                    </div>

                    <div class="mb-8">
                        <h1 class="font-bold text-gray-500">Claim Settlement Process</h1>
                        <ol class="list-decimal px-8">
                            <li>Insurance company will decide the claim settlement amount based on the surveyor’s report
                            </li>
                            <li>Claims reserve will be adjusted based on the settlement amount</li>
                            <li>Reinsurers will be informed about the claim settlement</li>
                            <li>
                                Insurer will obtain discharge from the Insured where the insured declares that he had
                                received
                                payment of insurance benefits from the insurer and waives of any further or future claim
                                against
                                the insurer in respect of the insured event.
                            </li>
                        </ol>
                    </div>

                    <div class="mb-8">
                        <h1 class="font-bold text-gray-500">Claim Recovery Process</h1>
                        <p>
                            If any third party is involved in the claims, then the Insurer will proceed in claim recovery
                            from
                            the third party based on the Principle of Indemnity (Subrogation).
                        </p>
                    </div>
                </div>
            </div>

        </div>

        <!-- Risk Analysis -->
        <div class="flex relative items-center flex-wrap mb-20">
            <div class="w-full md:w-1/2 px-5 z-20">
                <div class="text-center">
                    <h4 class="text-2xl md:text-3xl text-gray-800 font-bold mb-3">Risk Analysis in Insurance</h4>
                </div>
                <div class="overflow-y-auto flex-col items-center px-5 max-h-96 mt-5">
                    <div class="mb-8 text-center">
                        <p class="text-gray-600 mb-8">
                            Risk analysis is a very important job that is carried out in an Insurance company. We have a
                            separate department
                            (Underwriting & Risk Inspection) who does this job meticulously. Risk analysis is a part of the
                            risk
                            management model.
                        </p>
                    </div>

                    <div class="mb-8">
                        <h1 class="font-bold text-gray-500">Risk Management Process</h1>
                        <ol class="list-decimal px-8">
                            <li>Identification of risk</li>
                            <li>Evaluating or Analyzing the risk</li>
                            <li>Treating risk</li>
                        </ol>
                    </div>

                    <div class="mb-8">
                        <h1 class="font-bold text-gray-500">Risk Identification</h1>
                        <p>
                            Whenever the insurer or the broker receives a proposal from a proposer, the first step that is
                            involved is identifying the risk.
                            The risk can be broadly categorized as
                        </p>
                        <ul class="list-disc px-8">
                            <li>Preferred risk - Risks Which are profitable to the Insurance company if accepted</li>
                            <li>Referred risk - Risks which are moderately preferred and written in the books with less or
                                medium discount. Mostly referred risk will be accepted only after risk inspection</li>
                            <li>Declined risk - Risk which are loss making where the Insurers are not keen on writing</li>
                        </ul>
                        <p>
                            We have to bear in our mind that each Insurer has their own guidelines in categorizing the risk,
                            and
                            Reinsurance also plays a vital role in categorizing the risks.
                        </p>
                    </div>

                    <div class="mb-8">
                        <h1 class="font-bold text-gray-500">Risk Analysis</h1>
                        <p>
                            Once the risk is identified and the Insurer has decided to write them in their book, the process
                            of
                            risk analysis will begin.
                            The risk is evaluated on the matrix of frequency and severity, which will help determine
                            insurability, premium, conditions that are to be incorporated, and warranties that are to be
                            applied.
                        </p>
                        <p>
                            Risk frequency relates to how often the loss occurs, and severity relates to how expensive the
                            losses could be because of the Insured event.
                            Risk frequency and severity ratio have a direct impact on the cost of Insurance, i.e., premium.
                            High frequency and less severity draw lesser premium while compared to the risk which has less
                            frequency and high severity.
                        </p>
                        <p>
                            We can obtain the frequency and severity based on few underwriting factors like Occupancy,
                            Earthquake Zone, Nearest water body, availability of FEA, and so on.
                        </p>
                    </div>

                    <div class="mb-8">
                        <h1 class="font-bold text-gray-500">Treatment of Risk</h1>
                        <p>
                            The last and final step in risk management is the treatment of risk. Based upon understanding of
                            the
                            risk, the insurer will treat the risk in any of the following ways:
                        </p>
                        <ul class="list-disc px-8">
                            <li>Insurer might avoid the risk</li>
                            <li>Eliminate the risk</li>
                            <li>Reduce the risk</li>
                            <li>Transfer the risk</li>
                        </ul>
                    </div>
                </div>
            </div>


            <div class="w-full md:w-1/2 absolute md:static z-10">
                <img class="rounded-lg opacity-15 md:opacity-100"
                     src="{{ asset('images/landing-page/app/about/risk-analysis.png') }}">
            </div>
        </div>
    </section>

    <!-- Testimonials -->


@endsection


@push('third_party_scripts')
    <script src="{{ asset('js/scrollreveal.min.js') }}"></script>
@endpush

@push('page_scripts')
    <script>
        const sr = ScrollReveal({
            origin: "bottom",
            distance: "80px",
            duration: 3000,
            delay: 100,
        });

        // sr.reveal(".header_img");
        sr.reveal(".product_items", {
            interval: 200,
            origin: "bottom",
        });

        sr.reveal(".product_header", {
            origin: "top",
        });

        ScrollReveal().reveal('.header_img', {
            origin: 'bottom',
            distance: '60px',
            duration: 3000,
            delay: 600,
        });

        // new hero
        sr.reveal('.hero__text', {
            origin: 'top'
        });
        sr.reveal('.hero__img');

        // partner Section
        sr.reveal(".partner_header", {
            origin: "top",
        });

        ScrollReveal().reveal('.partner_img', {
            origin: 'bottom',
            distance: '60px',
            duration: 3000,
            delay: 600,
            interval: 200,
        });
    </script>
@endpush

@push('page_css')
    <style>

    </style>
@endpush

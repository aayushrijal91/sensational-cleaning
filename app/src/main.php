<?php
include __DIR__ . '/../functions.php';
include __DIR__ . '/header.php';
?>

<section class="services">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-xl-10">
                <div class="text-white font-raleway fw-700 h4 pb-7">See How Our Services Work</div>
                <div class="row justify-content-between align-items-center">
                    <div class="col-auto">
                        <div class="text-white">Click Service:</div>
                    </div>
                    <div class="col">
                        <div class="service-btn active" d-name="service-flood-restoration">Flood Restoration</div>
                    </div>
                    <div class="col">
                        <div class="service-btn" d-name="service-wet-carpet-drying">Wet Carpet Drying</div>
                    </div>
                    <div class="col-auto">
                        <div class="service-btn" d-name="service-water-damage-restoration">Water Damage Restoration</div>
                    </div>
                    <div class="col-auto">
                        <div class="service-btn" d-name="service-sewerage-overflow">Sewerage Overflow Clean Up</div>
                    </div>
                    <div class="col">
                        <div class="service-btn" d-name="service-mould-remediation">Mould Remediation</div>
                    </div>
                </div>
                <hr class="bg-white my-6">
                <div class="service-note">

                </div>
                <?php
                $services = [
                    "service-flood-restoration" => [
                        1 => [
                            "question" => "Water Extraction",
                            "answer" => "The first stage would be to begin the water extraction process. Our skilled Technicians will start by extracting all the water in the affected area that have been subject to flooding and water ingress with our specialized water extraction equipment.",
                        ],
                        2 => [
                            "question" => "Anti-Mould Treatment",
                            "answer" => "On Completion of the water extraction process we then apply our anti mould treatment to the flood affected areas to kill and prevent the growth of mould."
                        ],
                        3 => [
                            "question" => "Browning Treatment",
                            "answer" => "Browning treatment is then applied to all the flood affected areas to help prevent carpets from turning brown and discolouration due to water exposure and contamination."
                        ],
                        4 => [
                            "question" => "Carpet Drying",
                            "answer" => "Portable powerful Dryers and blowers are then placed in position to dry the water from damaged areas that have been flooded to help get your carpets and floors dry as quickly as possible and to minimise further damage."
                        ],
                        5 => [
                            "question" => "Carpet Cleaning + Treatment",
                            "answer" => "After your carpets are dry, we then proceed to the final stage of the water damage restoration process by buffing and cleaning your carpets using the dry-cleaning method with a polivac buffer machine. Sanitisation, deodorisation, and re application of anti mould treatment are all include in the final stages, leaving you carpets fresh clean and rejuvenated."
                        ]
                    ],
                    "service-wet-carpet-drying" => [
                        1 => [
                            "question" => "Removing the Dangers",
                            "answer" => "Our first goal is to remove any dangers associated with wet carpet. We will check to see if your carpet has been exposed to contaminated water and recommend the best route to take even if it means disposing of the carpet to keep you safe.",
                        ],
                        2 => [
                            "question" => "Protecting from Mould",
                            "answer" => "Mould can cause many health issues and preventing it from growing is a top priority. Wet carpet is associated with many complications, especially mould. We take every precaution to prevent the growth of mould with top sanitisation and deodorising techniques. We use an anti-microbial spray to prevent mould from developing and then complete a full drying process to ensure all moisture is removed to avoid future issues. Some signs of mould issues include windows misting over during the winter or an unusual, musty odour."
                        ],
                        3 => [
                            "question" => "Fresh and Clean",
                            "answer" => "Water can also cause discolouration as well as create foul odours. We take measures to ensure stains are removed along with any odours using deodorisers and anti-browning spray. If necessary we will also use blowers and dehumidifiers to ensure your carpet is completely dry."
                        ],
                        4 => [
                            "question" => "Final Cleaning",
                            "answer" => "<p>Once all dangers have been removed we complete a final cleaning and deodorising leaving your carpets fresh and clean, safe for family living.</p><div>If you have wet carpets requiring restoration, we can supply you with the advice and services to stop moisture damage in its tracks, help prevent mould and bring your carpets back to their original condition.</div>"
                        ]
                    ],
                    "service-water-damage-restoration" => [
                        1 => [
                            "question" => "Assessment",
                            "answer" => "Before we do anything we take a look at what damages have been done and how best to restore them. We will make an honest recommendation based on how long the carpets have been wet and how the damage was created. Carpets that have been exposed to sewage-contaminated waters for more than 24 hours should be disposed of as soon as possible as they will be beyond repair."
                        ],
                        2 => [
                            "question" => "Detection",
                            "answer" => "We will remove stagnant water from your carpet using an advanced extraction method with our powerful vacuums. We will then use moisture detection tools to discover any further moisture issues to ensure there is no possible danger of further moisture damage."
                        ],
                        3 => [
                            "question" => "Restoration",
                            "answer" => "<p>We can then conduct a thorough drying and cleaning of your carpets using pulleys to lift and remove your carpet. We can then sanitise, pressure and steam clean your carpets to ensure they are clean and safe to be returned to your home.</p><div>With our 24/7 professional services we encourage you to call as soon as the damage occurs so we can get our team out to your home and get started before further damage can occur.</div>"
                        ],
                    ],
                ];

                foreach ($services as $id => $service) {
                ?>
                    <div class="accordion-container<?= ($id == "service-flood-restoration") ? " active" : ""; ?>" id="<?= $id ?>">
                        <?php foreach ($service as $questionNumber => $faq) {
                        ?>
                            <div class="accordion-card">
                                <div class="accordion-head<?= ($questionNumber == 1) ? " active" : ""; ?>">
                                    <div class="main-question">
                                        <div class="row no-gutters">
                                            <div class="col-auto text-primary pr-2 pr-md-4 fw-700"><?= $questionNumber ?></div>
                                            <div class="col-auto"><?= $faq["question"] ?></div>
                                        </div>
                                    </div>
                                    <div class="plusminus">
                                        <?php if ($questionNumber == 1) { ?>
                                            <svg width="18" height="13" viewBox="0 0 18 13" fill="#A40003" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M17.4371 8.83331C17.5909 8.99745 17.719 9.20037 17.814 9.4305C17.909 9.66063 17.9691 9.91346 17.9908 10.1745C18.0347 10.7018 17.9197 11.2308 17.6711 11.645C17.4224 12.0592 17.0606 12.3248 16.6651 12.3833C16.2696 12.4418 15.8729 12.2884 15.5622 11.957L9 4.95775L2.43782 11.957C2.12714 12.2884 1.73041 12.4418 1.33492 12.3833C0.939421 12.3248 0.577557 12.0592 0.328928 11.645C0.0802993 11.2308 -0.0347253 10.7018 0.00915708 10.1745C0.0530375 9.64725 0.252231 9.1648 0.562918 8.83331L8.06255 0.834208C8.32858 0.550233 8.65921 0.395508 9 0.395508C9.34079 0.395508 9.67142 0.550233 9.93745 0.834208L17.4371 8.83331Z" fill="#A40003" />
                                            </svg>
                                        <?php } else { ?>
                                            <svg width="18" height="13" viewBox="0 0 18 13" fill="#A40003" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M17.4371 3.9577C17.5909 3.79357 17.719 3.59064 17.814 3.36051C17.909 3.13039 17.9691 2.87756 17.9908 2.61647C18.0347 2.08918 17.9197 1.56024 17.6711 1.14602C17.4224 0.731795 17.0606 0.46622 16.6651 0.407715C16.2696 0.34921 15.8729 0.502568 15.5622 0.834052L9 7.83327L2.43782 0.834051C2.12714 0.502567 1.73041 0.349209 1.33492 0.407714C0.939421 0.466219 0.577557 0.731794 0.328928 1.14602C0.0802993 1.56024 -0.0347253 2.08918 0.00915708 2.61647C0.0530375 3.14376 0.252231 3.62622 0.562918 3.9577L8.06255 11.9568C8.32858 12.2408 8.65921 12.3955 9 12.3955C9.34079 12.3955 9.67142 12.2408 9.93745 11.9568L17.4371 3.9577Z" fill="#A40003" />
                                            </svg>
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="accordion-body" style="<?= ($questionNumber == 1) ? 'display: block;' : ''; ?>">
                                    <div class="row no-gutters">
                                        <div class="col-auto text-primary pr-2 pr-md-4 h14">A:</div>
                                        <div class="col">
                                            <?= $faq["answer"] ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php
                        } ?>
                    </div>
                <?php } ?>
                <div class="accordion-container" id="service-sewerage-overflow">
                    <p class="text-white h8 fw-500">Wastewater contains 99.7 per cent water. However, the 0.3 per cent of dissolved and suspended matter can contain many microorganisms that may be harmful to humans, animals and the environment.</p>
                    <p class="text-white h8 fw-500">These can include:</p>
                    <div class="row no-gutters text-white h10 fw-800 pt-4 pb-5">
                        <div class="col-auto">
                            <svg width="39" height="39" viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g id="Icon">
                                    <path id="Oval" fill-rule="evenodd" clip-rule="evenodd" d="M19.5 37.8208C29.4411 37.8208 37.5 29.7619 37.5 19.8208C37.5 9.87968 29.4411 1.8208 19.5 1.8208C9.55887 1.8208 1.5 9.87968 1.5 19.8208C1.5 29.7619 9.55887 37.8208 19.5 37.8208Z" stroke="white" stroke-width="1.5" />
                                    <path id="Icon_2" d="M17.0976 25.5571L12.2051 20.6938C12.0684 20.5571 12 20.3813 12 20.1665C12 19.9516 12.0684 19.7759 12.2051 19.6391L13.2891 18.5845C13.4258 18.4282 13.5967 18.3501 13.8018 18.3501C14.0068 18.3501 14.1875 18.4282 14.3437 18.5845L17.625 21.8657L24.6562 14.8345C24.8125 14.6782 24.9931 14.6001 25.1982 14.6001C25.4033 14.6001 25.5742 14.6782 25.7109 14.8345L26.7949 15.8892C26.9316 16.0259 27 16.2017 27 16.4165C27 16.6313 26.9316 16.8071 26.7949 16.9438L18.1523 25.5571C18.0156 25.7134 17.8398 25.7915 17.625 25.7915C17.4101 25.7915 17.2344 25.7134 17.0976 25.5571Z" fill="white" />
                                </g>
                            </svg>
                            <span class="pl-4">Viruses</span>
                        </div>
                        <div class="col-auto pl-7">
                            <svg width="39" height="39" viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g id="Icon">
                                    <path id="Oval" fill-rule="evenodd" clip-rule="evenodd" d="M19.5 37.8208C29.4411 37.8208 37.5 29.7619 37.5 19.8208C37.5 9.87968 29.4411 1.8208 19.5 1.8208C9.55887 1.8208 1.5 9.87968 1.5 19.8208C1.5 29.7619 9.55887 37.8208 19.5 37.8208Z" stroke="white" stroke-width="1.5" />
                                    <path id="Icon_2" d="M17.0976 25.5571L12.2051 20.6938C12.0684 20.5571 12 20.3813 12 20.1665C12 19.9516 12.0684 19.7759 12.2051 19.6391L13.2891 18.5845C13.4258 18.4282 13.5967 18.3501 13.8018 18.3501C14.0068 18.3501 14.1875 18.4282 14.3437 18.5845L17.625 21.8657L24.6562 14.8345C24.8125 14.6782 24.9931 14.6001 25.1982 14.6001C25.4033 14.6001 25.5742 14.6782 25.7109 14.8345L26.7949 15.8892C26.9316 16.0259 27 16.2017 27 16.4165C27 16.6313 26.9316 16.8071 26.7949 16.9438L18.1523 25.5571C18.0156 25.7134 17.8398 25.7915 17.625 25.7915C17.4101 25.7915 17.2344 25.7134 17.0976 25.5571Z" fill="white" />
                                </g>
                            </svg>
                            <span class="pl-4">Bacteria</span>
                        </div>
                        <div class="col-auto pl-7">
                            <svg width="39" height="39" viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g id="Icon">
                                    <path id="Oval" fill-rule="evenodd" clip-rule="evenodd" d="M19.5 37.8208C29.4411 37.8208 37.5 29.7619 37.5 19.8208C37.5 9.87968 29.4411 1.8208 19.5 1.8208C9.55887 1.8208 1.5 9.87968 1.5 19.8208C1.5 29.7619 9.55887 37.8208 19.5 37.8208Z" stroke="white" stroke-width="1.5" />
                                    <path id="Icon_2" d="M17.0976 25.5571L12.2051 20.6938C12.0684 20.5571 12 20.3813 12 20.1665C12 19.9516 12.0684 19.7759 12.2051 19.6391L13.2891 18.5845C13.4258 18.4282 13.5967 18.3501 13.8018 18.3501C14.0068 18.3501 14.1875 18.4282 14.3437 18.5845L17.625 21.8657L24.6562 14.8345C24.8125 14.6782 24.9931 14.6001 25.1982 14.6001C25.4033 14.6001 25.5742 14.6782 25.7109 14.8345L26.7949 15.8892C26.9316 16.0259 27 16.2017 27 16.4165C27 16.6313 26.9316 16.8071 26.7949 16.9438L18.1523 25.5571C18.0156 25.7134 17.8398 25.7915 17.625 25.7915C17.4101 25.7915 17.2344 25.7134 17.0976 25.5571Z" fill="white" />
                                </g>
                            </svg>
                            <span class="pl-4">Fungal</span>
                        </div>
                        <div class="col-auto pl-7">
                            <svg width="39" height="39" viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g id="Icon">
                                    <path id="Oval" fill-rule="evenodd" clip-rule="evenodd" d="M19.5 37.8208C29.4411 37.8208 37.5 29.7619 37.5 19.8208C37.5 9.87968 29.4411 1.8208 19.5 1.8208C9.55887 1.8208 1.5 9.87968 1.5 19.8208C1.5 29.7619 9.55887 37.8208 19.5 37.8208Z" stroke="white" stroke-width="1.5" />
                                    <path id="Icon_2" d="M17.0976 25.5571L12.2051 20.6938C12.0684 20.5571 12 20.3813 12 20.1665C12 19.9516 12.0684 19.7759 12.2051 19.6391L13.2891 18.5845C13.4258 18.4282 13.5967 18.3501 13.8018 18.3501C14.0068 18.3501 14.1875 18.4282 14.3437 18.5845L17.625 21.8657L24.6562 14.8345C24.8125 14.6782 24.9931 14.6001 25.1982 14.6001C25.4033 14.6001 25.5742 14.6782 25.7109 14.8345L26.7949 15.8892C26.9316 16.0259 27 16.2017 27 16.4165C27 16.6313 26.9316 16.8071 26.7949 16.9438L18.1523 25.5571C18.0156 25.7134 17.8398 25.7915 17.625 25.7915C17.4101 25.7915 17.2344 25.7134 17.0976 25.5571Z" fill="white" />
                                </g>
                            </svg>
                            <span class="pl-4">Parasitic Organisms</span>
                        </div>
                    </div>
                    <p class="text-white h8 fw-500">If you come into contact with wastewater or its products, you could end up being exposed to harmful microorganisms that can cause illnesses such as:</p>
                    <div class="row no-gutters text-white h10 fw-800 pt-4 pb-5">
                        <div class="col-auto">
                            <svg width="39" height="39" viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g id="Icon">
                                    <path id="Oval" fill-rule="evenodd" clip-rule="evenodd" d="M19.5 37.8208C29.4411 37.8208 37.5 29.7619 37.5 19.8208C37.5 9.87968 29.4411 1.8208 19.5 1.8208C9.55887 1.8208 1.5 9.87968 1.5 19.8208C1.5 29.7619 9.55887 37.8208 19.5 37.8208Z" stroke="white" stroke-width="1.5" />
                                    <path id="Icon_2" d="M17.0976 25.5571L12.2051 20.6938C12.0684 20.5571 12 20.3813 12 20.1665C12 19.9516 12.0684 19.7759 12.2051 19.6391L13.2891 18.5845C13.4258 18.4282 13.5967 18.3501 13.8018 18.3501C14.0068 18.3501 14.1875 18.4282 14.3437 18.5845L17.625 21.8657L24.6562 14.8345C24.8125 14.6782 24.9931 14.6001 25.1982 14.6001C25.4033 14.6001 25.5742 14.6782 25.7109 14.8345L26.7949 15.8892C26.9316 16.0259 27 16.2017 27 16.4165C27 16.6313 26.9316 16.8071 26.7949 16.9438L18.1523 25.5571C18.0156 25.7134 17.8398 25.7915 17.625 25.7915C17.4101 25.7915 17.2344 25.7134 17.0976 25.5571Z" fill="white" />
                                </g>
                            </svg>
                            <span class="pl-4">Gastroenteritis (Diarrhoea Or Vomiting)</span>
                        </div>
                        <div class="col-auto pl-7">
                            <svg width="39" height="39" viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g id="Icon">
                                    <path id="Oval" fill-rule="evenodd" clip-rule="evenodd" d="M19.5 37.8208C29.4411 37.8208 37.5 29.7619 37.5 19.8208C37.5 9.87968 29.4411 1.8208 19.5 1.8208C9.55887 1.8208 1.5 9.87968 1.5 19.8208C1.5 29.7619 9.55887 37.8208 19.5 37.8208Z" stroke="white" stroke-width="1.5" />
                                    <path id="Icon_2" d="M17.0976 25.5571L12.2051 20.6938C12.0684 20.5571 12 20.3813 12 20.1665C12 19.9516 12.0684 19.7759 12.2051 19.6391L13.2891 18.5845C13.4258 18.4282 13.5967 18.3501 13.8018 18.3501C14.0068 18.3501 14.1875 18.4282 14.3437 18.5845L17.625 21.8657L24.6562 14.8345C24.8125 14.6782 24.9931 14.6001 25.1982 14.6001C25.4033 14.6001 25.5742 14.6782 25.7109 14.8345L26.7949 15.8892C26.9316 16.0259 27 16.2017 27 16.4165C27 16.6313 26.9316 16.8071 26.7949 16.9438L18.1523 25.5571C18.0156 25.7134 17.8398 25.7915 17.625 25.7915C17.4101 25.7915 17.2344 25.7134 17.0976 25.5571Z" fill="white" />
                                </g>
                            </svg>
                            <span class="pl-4">Fungal</span>
                        </div>
                        <div class="col-auto pl-7">
                            <svg width="39" height="39" viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g id="Icon">
                                    <path id="Oval" fill-rule="evenodd" clip-rule="evenodd" d="M19.5 37.8208C29.4411 37.8208 37.5 29.7619 37.5 19.8208C37.5 9.87968 29.4411 1.8208 19.5 1.8208C9.55887 1.8208 1.5 9.87968 1.5 19.8208C1.5 29.7619 9.55887 37.8208 19.5 37.8208Z" stroke="white" stroke-width="1.5" />
                                    <path id="Icon_2" d="M17.0976 25.5571L12.2051 20.6938C12.0684 20.5571 12 20.3813 12 20.1665C12 19.9516 12.0684 19.7759 12.2051 19.6391L13.2891 18.5845C13.4258 18.4282 13.5967 18.3501 13.8018 18.3501C14.0068 18.3501 14.1875 18.4282 14.3437 18.5845L17.625 21.8657L24.6562 14.8345C24.8125 14.6782 24.9931 14.6001 25.1982 14.6001C25.4033 14.6001 25.5742 14.6782 25.7109 14.8345L26.7949 15.8892C26.9316 16.0259 27 16.2017 27 16.4165C27 16.6313 26.9316 16.8071 26.7949 16.9438L18.1523 25.5571C18.0156 25.7134 17.8398 25.7915 17.625 25.7915C17.4101 25.7915 17.2344 25.7134 17.0976 25.5571Z" fill="white" />
                                </g>
                            </svg>
                            <span class="pl-4">Parasitic Organisms</span>
                        </div>
                        <div class="col-12 pt-4">
                            <svg width="39" height="39" viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g id="Icon">
                                    <path id="Oval" fill-rule="evenodd" clip-rule="evenodd" d="M19.5 37.8208C29.4411 37.8208 37.5 29.7619 37.5 19.8208C37.5 9.87968 29.4411 1.8208 19.5 1.8208C9.55887 1.8208 1.5 9.87968 1.5 19.8208C1.5 29.7619 9.55887 37.8208 19.5 37.8208Z" stroke="white" stroke-width="1.5" />
                                    <path id="Icon_2" d="M17.0976 25.5571L12.2051 20.6938C12.0684 20.5571 12 20.3813 12 20.1665C12 19.9516 12.0684 19.7759 12.2051 19.6391L13.2891 18.5845C13.4258 18.4282 13.5967 18.3501 13.8018 18.3501C14.0068 18.3501 14.1875 18.4282 14.3437 18.5845L17.625 21.8657L24.6562 14.8345C24.8125 14.6782 24.9931 14.6001 25.1982 14.6001C25.4033 14.6001 25.5742 14.6782 25.7109 14.8345L26.7949 15.8892C26.9316 16.0259 27 16.2017 27 16.4165C27 16.6313 26.9316 16.8071 26.7949 16.9438L18.1523 25.5571C18.0156 25.7134 17.8398 25.7915 17.625 25.7915C17.4101 25.7915 17.2344 25.7134 17.0976 25.5571Z" fill="white" />
                                </g>
                            </svg>
                            <span class="pl-4">Giardiasis And Cryptosporidiosis (Severe Stomach Cramps, Diarrhoea or Vomiting)</span>
                        </div>
                    </div>
                    <p class="text-white h8 fw-500">Here at Sensational water damage specialists, we have fully qualified and trained technicians to Effectively Remove, Extract, Treat and decontaminate effect areas by Sewage waste water.</p>
                    <p class="text-white h8 fw-500">The first 24 hours is crucial to act in case of any sewage overflow incident to prevent serious health hazards. Call us today and let our Professional and Experienced Technicians Help You Today.</p>
                </div>
            </div>
        </div>
</section>

<?php include __DIR__ . '/footer.php'; ?>
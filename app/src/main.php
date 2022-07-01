<?php
include __DIR__ . '/../functions.php';
include __DIR__ . '/header.php';
?>

<section class="free-carpet-dryer-offer">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-xxl-10">
                <div class="row no-gutters justify-content-end">
                    <div class="col-12 d-lg-none pb-5"><?= renderImg("blower.png", "background", "w-100") ?></div>
                    <div class="col-xl-6 col-xxl-7">
                        <div class="fw-800 text-black h1 line-height-1 pb-5">Free* Carpet Dryer Hire<span class="sm-text">*Conditions apply</span></div>
                        <div class="horizontal-divider"></div>
                        <div class="fw-700 h7 line-height-3 py-4 text-black">
                            Sensational Water Damage Specialists can help with water damage restoration and repair. Whether your job is a big one or a small one, we pride ourselves in being able to complete any task quickly and professionally.
                        </div>
                        <div class="horizontal-divider"></div>
                        <div class="font-roboto text-dark pt-5">
                            <p>We employ skilled technicians to your home to repair carpet water damage in all areas of Sydney.</p>
                            <p>Having been in business for quite a while now, we understand that if water damage is one thing, it is unpredictable. Your dishwasher, washing machine, sink pipe, roof gutter, or bath suddenly decide to catastrophically fail, leaving you with a massive clean-up job.</p>
                            <div>Quite often a leak will appear in the middle of the night, possibly when no-one is awake, and is discovered by someone when getting a drink at 3:00 in the morning, and suddenly a normal night becomes not so normal.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="services">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-xl-11 col-xxl-10">
                <div class="row no-gutters justify-content-center justify-content-lg-between align-items-center pb-7 h14">
                    <div class="col-auto col-md-12 col-lg-auto text-white font-raleway fw-700 h4 text-center">See How Our Services Work</div>
                    <div class="col-11 col-md-auto pt-3">
                        <div class="bg-black text-white px-4 py-3 rounded-2 text-center">
                            <svg width="17" height="18" viewBox="0 0 17 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.01038 0.296387C3.61038 0.296387 0.010376 4.071 0.010376 8.68442C0.010376 13.2978 3.61038 17.0725 8.01038 17.0725C12.4104 17.0725 16.0104 13.2978 16.0104 8.68442C16.0104 4.071 12.4104 0.296387 8.01038 0.296387ZM8.01038 12.8784C7.41038 12.8784 7.01038 12.459 7.01038 11.8299C7.01038 11.2008 7.41038 10.7814 8.01038 10.7814C8.61038 10.7814 9.01038 11.2008 9.01038 11.8299C9.01038 12.459 8.61038 12.8784 8.01038 12.8784ZM9.01038 9.73293H7.01038V4.4904H9.01038V9.73293Z" fill="#DEAB0E" />
                            </svg>
                            <span class="pl-3">We Provide 24-hour Service</span>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-between align-items-center d-none d-lg-flex">
                    <div class="col-auto d-lg-none d-xl-block">
                        <div class="text-white">Click Service:</div>
                    </div>
                    <div class="col-auto col-xl">
                        <div class="service-btn active" id="service-flood-restoration-btn" d-name="service-flood-restoration">Flood Restoration</div>
                    </div>
                    <div class="col">
                        <div class="service-btn" id="service-wet-carpet-drying-btn" d-name="service-wet-carpet-drying">Wet Carpet Drying</div>
                    </div>
                    <div class="col-auto">
                        <div class="service-btn" id="service-water-damage-restoration-btn" d-name="service-water-damage-restoration">Water Damage Restoration</div>
                    </div>
                    <div class="col-auto">
                        <div class="service-btn" id="service-sewerage-overflow-btn" d-name="service-sewerage-overflow">Sewerage Overflow Clean Up</div>
                    </div>
                    <div class="col">
                        <div class="service-btn" id="service-mould-remediation-btn" d-name="service-mould-remediation">Mould Remediation</div>
                    </div>
                </div>

                <div class="row justify-content-between align-items-center d-lg-none">
                    <div class="col-auto text-white font-roboto fw-800">Choose: </div>
                    <div class="col">
                        <select class="service-btn-mobile form-control bg-primary border-0 text-white rounded-2">
                            <option selected d-name="service-flood-restoration">Flood Restoration</option>
                            <option d-name="service-wet-carpet-drying">Wet Carpet Drying</option>
                            <option d-name="service-water-damage-restoration">Water Damage Restoration</option>
                            <option d-name="service-sewerage-overflow">Sewerage Overflow Clean Up</option>
                            <option d-name="service-mould-remediation">Mould Remediation</option>
                        </select>
                    </div>
                </div>
                <hr class="bg-white my-5 my-md-6">
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
                    <div class="row justify-content-md-between justify-content-lg-start no-gutters text-white h10 fw-800 py-4 pb-md-5">
                        <div class="col-md-auto py-md-2 py-lg-0">
                            <svg width="39" height="39" viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g id="Icon">
                                    <path id="Oval" fill-rule="evenodd" clip-rule="evenodd" d="M19.5 37.8208C29.4411 37.8208 37.5 29.7619 37.5 19.8208C37.5 9.87968 29.4411 1.8208 19.5 1.8208C9.55887 1.8208 1.5 9.87968 1.5 19.8208C1.5 29.7619 9.55887 37.8208 19.5 37.8208Z" stroke="white" stroke-width="1.5" />
                                    <path id="Icon_2" d="M17.0976 25.5571L12.2051 20.6938C12.0684 20.5571 12 20.3813 12 20.1665C12 19.9516 12.0684 19.7759 12.2051 19.6391L13.2891 18.5845C13.4258 18.4282 13.5967 18.3501 13.8018 18.3501C14.0068 18.3501 14.1875 18.4282 14.3437 18.5845L17.625 21.8657L24.6562 14.8345C24.8125 14.6782 24.9931 14.6001 25.1982 14.6001C25.4033 14.6001 25.5742 14.6782 25.7109 14.8345L26.7949 15.8892C26.9316 16.0259 27 16.2017 27 16.4165C27 16.6313 26.9316 16.8071 26.7949 16.9438L18.1523 25.5571C18.0156 25.7134 17.8398 25.7915 17.625 25.7915C17.4101 25.7915 17.2344 25.7134 17.0976 25.5571Z" fill="white" />
                                </g>
                            </svg>
                            <span class="pl-2 pl-lg-4">Viruses</span>
                        </div>
                        <div class="col-md-auto pl-lg-7 py-2 py-lg-0">
                            <svg width="39" height="39" viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g id="Icon">
                                    <path id="Oval" fill-rule="evenodd" clip-rule="evenodd" d="M19.5 37.8208C29.4411 37.8208 37.5 29.7619 37.5 19.8208C37.5 9.87968 29.4411 1.8208 19.5 1.8208C9.55887 1.8208 1.5 9.87968 1.5 19.8208C1.5 29.7619 9.55887 37.8208 19.5 37.8208Z" stroke="white" stroke-width="1.5" />
                                    <path id="Icon_2" d="M17.0976 25.5571L12.2051 20.6938C12.0684 20.5571 12 20.3813 12 20.1665C12 19.9516 12.0684 19.7759 12.2051 19.6391L13.2891 18.5845C13.4258 18.4282 13.5967 18.3501 13.8018 18.3501C14.0068 18.3501 14.1875 18.4282 14.3437 18.5845L17.625 21.8657L24.6562 14.8345C24.8125 14.6782 24.9931 14.6001 25.1982 14.6001C25.4033 14.6001 25.5742 14.6782 25.7109 14.8345L26.7949 15.8892C26.9316 16.0259 27 16.2017 27 16.4165C27 16.6313 26.9316 16.8071 26.7949 16.9438L18.1523 25.5571C18.0156 25.7134 17.8398 25.7915 17.625 25.7915C17.4101 25.7915 17.2344 25.7134 17.0976 25.5571Z" fill="white" />
                                </g>
                            </svg>
                            <span class="pl-2 pl-lg-4">Bacteria</span>
                        </div>
                        <div class="col-md-auto pl-lg-7 py-2 py-lg-0">
                            <svg width="39" height="39" viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g id="Icon">
                                    <path id="Oval" fill-rule="evenodd" clip-rule="evenodd" d="M19.5 37.8208C29.4411 37.8208 37.5 29.7619 37.5 19.8208C37.5 9.87968 29.4411 1.8208 19.5 1.8208C9.55887 1.8208 1.5 9.87968 1.5 19.8208C1.5 29.7619 9.55887 37.8208 19.5 37.8208Z" stroke="white" stroke-width="1.5" />
                                    <path id="Icon_2" d="M17.0976 25.5571L12.2051 20.6938C12.0684 20.5571 12 20.3813 12 20.1665C12 19.9516 12.0684 19.7759 12.2051 19.6391L13.2891 18.5845C13.4258 18.4282 13.5967 18.3501 13.8018 18.3501C14.0068 18.3501 14.1875 18.4282 14.3437 18.5845L17.625 21.8657L24.6562 14.8345C24.8125 14.6782 24.9931 14.6001 25.1982 14.6001C25.4033 14.6001 25.5742 14.6782 25.7109 14.8345L26.7949 15.8892C26.9316 16.0259 27 16.2017 27 16.4165C27 16.6313 26.9316 16.8071 26.7949 16.9438L18.1523 25.5571C18.0156 25.7134 17.8398 25.7915 17.625 25.7915C17.4101 25.7915 17.2344 25.7134 17.0976 25.5571Z" fill="white" />
                                </g>
                            </svg>
                            <span class="pl-2 pl-lg-4">Fungal</span>
                        </div>
                        <div class="col-md-auto pl-lg-7 py-2 py-lg-0">
                            <svg width="39" height="39" viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g id="Icon">
                                    <path id="Oval" fill-rule="evenodd" clip-rule="evenodd" d="M19.5 37.8208C29.4411 37.8208 37.5 29.7619 37.5 19.8208C37.5 9.87968 29.4411 1.8208 19.5 1.8208C9.55887 1.8208 1.5 9.87968 1.5 19.8208C1.5 29.7619 9.55887 37.8208 19.5 37.8208Z" stroke="white" stroke-width="1.5" />
                                    <path id="Icon_2" d="M17.0976 25.5571L12.2051 20.6938C12.0684 20.5571 12 20.3813 12 20.1665C12 19.9516 12.0684 19.7759 12.2051 19.6391L13.2891 18.5845C13.4258 18.4282 13.5967 18.3501 13.8018 18.3501C14.0068 18.3501 14.1875 18.4282 14.3437 18.5845L17.625 21.8657L24.6562 14.8345C24.8125 14.6782 24.9931 14.6001 25.1982 14.6001C25.4033 14.6001 25.5742 14.6782 25.7109 14.8345L26.7949 15.8892C26.9316 16.0259 27 16.2017 27 16.4165C27 16.6313 26.9316 16.8071 26.7949 16.9438L18.1523 25.5571C18.0156 25.7134 17.8398 25.7915 17.625 25.7915C17.4101 25.7915 17.2344 25.7134 17.0976 25.5571Z" fill="white" />
                                </g>
                            </svg>
                            <span class="pl-2 pl-lg-4">Parasitic Organisms</span>
                        </div>
                    </div>
                    <p class="text-white h8 fw-500">If you come into contact with wastewater or its products, you could end up being exposed to harmful microorganisms that can cause illnesses such as:</p>
                    <div class="row no-gutters justify-content-md-between justify-content-lg-start text-white h10 fw-800 py-4 pb-md-5">
                        <div class="col-md-auto py-md-2 py-lg-0">
                            <svg width="39" height="39" viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g id="Icon">
                                    <path id="Oval" fill-rule="evenodd" clip-rule="evenodd" d="M19.5 37.8208C29.4411 37.8208 37.5 29.7619 37.5 19.8208C37.5 9.87968 29.4411 1.8208 19.5 1.8208C9.55887 1.8208 1.5 9.87968 1.5 19.8208C1.5 29.7619 9.55887 37.8208 19.5 37.8208Z" stroke="white" stroke-width="1.5" />
                                    <path id="Icon_2" d="M17.0976 25.5571L12.2051 20.6938C12.0684 20.5571 12 20.3813 12 20.1665C12 19.9516 12.0684 19.7759 12.2051 19.6391L13.2891 18.5845C13.4258 18.4282 13.5967 18.3501 13.8018 18.3501C14.0068 18.3501 14.1875 18.4282 14.3437 18.5845L17.625 21.8657L24.6562 14.8345C24.8125 14.6782 24.9931 14.6001 25.1982 14.6001C25.4033 14.6001 25.5742 14.6782 25.7109 14.8345L26.7949 15.8892C26.9316 16.0259 27 16.2017 27 16.4165C27 16.6313 26.9316 16.8071 26.7949 16.9438L18.1523 25.5571C18.0156 25.7134 17.8398 25.7915 17.625 25.7915C17.4101 25.7915 17.2344 25.7134 17.0976 25.5571Z" fill="white" />
                                </g>
                            </svg>
                            <span class="pl-2 pl-lg-4">Gastroenteritis (Diarrhoea Or Vomiting)</span>
                        </div>
                        <div class="col-md-auto pl-lg-7 py-2 py-lg-0">
                            <svg width="39" height="39" viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g id="Icon">
                                    <path id="Oval" fill-rule="evenodd" clip-rule="evenodd" d="M19.5 37.8208C29.4411 37.8208 37.5 29.7619 37.5 19.8208C37.5 9.87968 29.4411 1.8208 19.5 1.8208C9.55887 1.8208 1.5 9.87968 1.5 19.8208C1.5 29.7619 9.55887 37.8208 19.5 37.8208Z" stroke="white" stroke-width="1.5" />
                                    <path id="Icon_2" d="M17.0976 25.5571L12.2051 20.6938C12.0684 20.5571 12 20.3813 12 20.1665C12 19.9516 12.0684 19.7759 12.2051 19.6391L13.2891 18.5845C13.4258 18.4282 13.5967 18.3501 13.8018 18.3501C14.0068 18.3501 14.1875 18.4282 14.3437 18.5845L17.625 21.8657L24.6562 14.8345C24.8125 14.6782 24.9931 14.6001 25.1982 14.6001C25.4033 14.6001 25.5742 14.6782 25.7109 14.8345L26.7949 15.8892C26.9316 16.0259 27 16.2017 27 16.4165C27 16.6313 26.9316 16.8071 26.7949 16.9438L18.1523 25.5571C18.0156 25.7134 17.8398 25.7915 17.625 25.7915C17.4101 25.7915 17.2344 25.7134 17.0976 25.5571Z" fill="white" />
                                </g>
                            </svg>
                            <span class="pl-2 pl-lg-4">Fungal</span>
                        </div>
                        <div class="col-md-auto pl-lg-7 py-2 py-lg-0">
                            <svg width="39" height="39" viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g id="Icon">
                                    <path id="Oval" fill-rule="evenodd" clip-rule="evenodd" d="M19.5 37.8208C29.4411 37.8208 37.5 29.7619 37.5 19.8208C37.5 9.87968 29.4411 1.8208 19.5 1.8208C9.55887 1.8208 1.5 9.87968 1.5 19.8208C1.5 29.7619 9.55887 37.8208 19.5 37.8208Z" stroke="white" stroke-width="1.5" />
                                    <path id="Icon_2" d="M17.0976 25.5571L12.2051 20.6938C12.0684 20.5571 12 20.3813 12 20.1665C12 19.9516 12.0684 19.7759 12.2051 19.6391L13.2891 18.5845C13.4258 18.4282 13.5967 18.3501 13.8018 18.3501C14.0068 18.3501 14.1875 18.4282 14.3437 18.5845L17.625 21.8657L24.6562 14.8345C24.8125 14.6782 24.9931 14.6001 25.1982 14.6001C25.4033 14.6001 25.5742 14.6782 25.7109 14.8345L26.7949 15.8892C26.9316 16.0259 27 16.2017 27 16.4165C27 16.6313 26.9316 16.8071 26.7949 16.9438L18.1523 25.5571C18.0156 25.7134 17.8398 25.7915 17.625 25.7915C17.4101 25.7915 17.2344 25.7134 17.0976 25.5571Z" fill="white" />
                                </g>
                            </svg>
                            <span class="pl-2 pl-lg-4">Parasitic Organisms</span>
                        </div>
                        <div class="col-12 pt-md-0 pt-lg-4">
                            <svg width="39" height="39" viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g id="Icon">
                                    <path id="Oval" fill-rule="evenodd" clip-rule="evenodd" d="M19.5 37.8208C29.4411 37.8208 37.5 29.7619 37.5 19.8208C37.5 9.87968 29.4411 1.8208 19.5 1.8208C9.55887 1.8208 1.5 9.87968 1.5 19.8208C1.5 29.7619 9.55887 37.8208 19.5 37.8208Z" stroke="white" stroke-width="1.5" />
                                    <path id="Icon_2" d="M17.0976 25.5571L12.2051 20.6938C12.0684 20.5571 12 20.3813 12 20.1665C12 19.9516 12.0684 19.7759 12.2051 19.6391L13.2891 18.5845C13.4258 18.4282 13.5967 18.3501 13.8018 18.3501C14.0068 18.3501 14.1875 18.4282 14.3437 18.5845L17.625 21.8657L24.6562 14.8345C24.8125 14.6782 24.9931 14.6001 25.1982 14.6001C25.4033 14.6001 25.5742 14.6782 25.7109 14.8345L26.7949 15.8892C26.9316 16.0259 27 16.2017 27 16.4165C27 16.6313 26.9316 16.8071 26.7949 16.9438L18.1523 25.5571C18.0156 25.7134 17.8398 25.7915 17.625 25.7915C17.4101 25.7915 17.2344 25.7134 17.0976 25.5571Z" fill="white" />
                                </g>
                            </svg>
                            <span class="pl-2 pl-md-4">Giardiasis And Cryptosporidiosis (Severe Stomach Cramps, Diarrhoea or Vomiting)</span>
                        </div>
                    </div>
                    <p class="text-white h8 fw-500">Here at Sensational water damage specialists, we have fully qualified and trained technicians to Effectively Remove, Extract, Treat and decontaminate effect areas by Sewage waste water.</p>
                    <p class="text-white h8 fw-500">The first 24 hours is crucial to act in case of any sewage overflow incident to prevent serious health hazards. Call us today and let our Professional and Experienced Technicians Help You Today.</p>
                </div>
            </div>
        </div>
</section>

<section class="about">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-11">
                <div class="row no-gutters justify-content-between about-outer-wrapper align-items-center">
                    <div class="col-12 col-md-auto">
                        <?= renderImg("about.png", "background", "d-none d-md-block d-lg-none d-xl-block") ?>
                        <?= renderImg("about-sm.png", "background", "w-100 d-md-none") ?>
                    </div>
                    <div class="col about-wrapper">
                        <div class="bg-black text-center d-block d-md-inline-block h16 fw-600 px-4 pt-2 pb-1 mb-2">With Over 20 Years in the Industry, we are the experts</div>
                        <div class="h5 fw-700 py-4">Our technicians are trained to recognize when a carpet is too far gone, and if it is, we will let you know after our initial assessment</div>
                        <div class="text-grey fw-500 h10 pb-3">Should you want some convincing, please have a look at our testimonials page, where we have just a small portion of our satisfied customers.</div>
                        <div class="text-grey fw-500 h10">If you would like to obtain a quote or arrange a booking, please don’t hesitate to give us a call or you can use our contact us page and send us a message.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="brands">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-xxl-10">
                <div class="row no-gutters justify-content-center justify-content-md-between align-items-center">
                    <div class="col-md-auto col-lg-6 col-xl-auto py-4 py-xl-0 px-lg-4 px-xl-0">
                        <a href="https://www.facebook.com/sensationalcleaning.com.au/?ref=page_internal" target="_blank" class="text-decoration-none">
                            <div class="facebook-review-card">
                                <div class="row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <?= renderImg("review-fb.png", "icons") ?>
                                    </div>
                                    <div class="col text-white px-3">
                                        <div class="text-uppercase fw-700 line-height-1">5 star review rating</div>
                                        <div class="h19 d-flex align-items-center line-height-1 pt-2">Over 166 <?= renderImg("5star-sm.svg", "icons", "pl-3") ?></div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-auto col-lg-6 col-xl-auto py-4 py-xl-0 px-lg-4 px-xl-0">
                        <a href="https://goo.gl/maps/7nRgBcR5pDJ4stNW9" target="_blank" class="text-decoration-none">
                            <div class="google-review-card">
                                <div class="row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <?= renderImg("review-google.png", "icons") ?>
                                    </div>
                                    <div class="col text-white px-3">
                                        <div class="text-uppercase h12 fw-700 line-height-1">Trusted Services</div>
                                        <?= renderImg("5star.png", "icons", "pt-1") ?>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-auto col-lg-6 col-xl-auto py-4 py-xl-0 px-lg-4 px-xl-0">
                        <?= renderImg("ria.png", "logo") ?>
                    </div>
                    <div class="col-md-auto col-lg-6 col-xl-auto py-4 py-xl-0 px-lg-4 px-xl-0">
                        <?= renderImg("rpc.png", "logo", "w-100") ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="form" id="form">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-11 form-wrapper">
                <div class="form_heroTitle">
                    Get 50% off Carpet Mould Treatment Services when you Book Online!
                </div>
                <form action="./src/form" method="POST">
                    <input type="hidden" name="token" id="recaptchaResponse" class="recaptchaResponse">
                    <div class="row no-gutters pb-3">
                        <div class="col-12 col-md-6 pr-md-2">
                            <label class="fw-800" for="firstName">Your First Name</label>
                            <input id="firstName" class="form-control border-light-grey rounded-0 bg-white" type="text" placeholder="Eg: John" name="firstName" required>
                        </div>
                        <div class="col-12 col-md-6 pl-md-2 mt-4 mt-md-0">
                            <label class="fw-800" for="lastName">Your Surname</label>
                            <input id="lastName" class="form-control border-light-grey rounded-0 bg-white" type="text" placeholder="Eg: Doe" name="lastName" required>
                        </div>
                        <div class="col-12 col-md-6 pr-md-2 mt-4">
                            <label class="fw-800" for="phone">Your Phone Number</label>
                            <input id="phone" class="form-control rounded-0 border-light-grey bg-white" type="tel" placeholder="Eg: 0400 000 000" name="phone" required>
                        </div>
                        <div class="col-12 col-md-6 pl-md-2 mt-4">
                            <label class="fw-800" for="email">Your Email Address</label>
                            <input id="email" class="form-control rounded-0 border-light-grey bg-white" type="email" placeholder="Eg: example@email.com.au" name="email" required>
                        </div>
                        <div class="col-12 col-md-6 pr-md-2 mt-4">
                            <label class="fw-800" for="address">Your Address</label>
                            <input id="address" class="form-control border-1 rounded-0 border-light-grey bg-white" type="text" placeholder="Enter street address here" name="address" required>
                        </div>
                        <div class="col-12 col-md-6 pl-md-2 mt-4">
                            <label class="fw-800" for="postcode">Your City / Postcode</label>
                            <input id="postcode" class="form-control border-1 rounded-0 border-light-grey bg-white" type="text" placeholder="Eg: adelaide / 5000" name="postcode" required>
                        </div>
                    </div>
                    <div class="row align-items-center justify-content-between pt-4">
                        <div class="col-12 col-md-7 col-lg-auto form_privacyInformation">
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto pr-3">
                                    <svg width="23" height="27" viewBox="0 0 23 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13.5536 9.2807C13.5536 8.72124 13.3372 8.18469 12.9521 7.7891C12.567 7.3935 12.0446 7.17126 11.5 7.17126C10.9554 7.17126 10.433 7.3935 10.0479 7.7891C9.66279 8.18469 9.44643 8.72124 9.44643 9.2807V11.812H13.5536V9.2807Z" fill="#A0A0AB" />
                                        <path d="M21.6282 1.71034L11.7711 0.0227839C11.5916 -0.00759462 11.4084 -0.00759462 11.2289 0.0227839L1.37179 1.71034C0.988478 1.77621 0.640314 1.97953 0.389157 2.28417C0.138 2.58881 0.000114093 2.97505 0 3.37426V15.1871C0 18.3201 1.2116 21.3247 3.36827 23.5401C5.52494 25.7554 8.45001 27 11.5 27C14.55 27 17.4751 25.7554 19.6317 23.5401C21.7884 21.3247 23 18.3201 23 15.1871V3.37426C22.9999 2.97505 22.862 2.58881 22.6108 2.28417C22.3597 1.97953 22.0115 1.77621 21.6282 1.71034ZM18.0714 18.5622C18.0714 19.0098 17.8983 19.439 17.5902 19.7555C17.2822 20.072 16.8643 20.2498 16.4286 20.2498H6.57143C6.13572 20.2498 5.71785 20.072 5.40975 19.7555C5.10166 19.439 4.92857 19.0098 4.92857 18.5622V13.4996C4.92857 13.052 5.10166 12.6228 5.40975 12.3063C5.71785 11.9898 6.13572 11.812 6.57143 11.812H6.98214V9.2807C6.98214 8.04989 7.45813 6.86949 8.30539 5.99918C9.15265 5.12886 10.3018 4.63993 11.5 4.63993C12.6982 4.63993 13.8473 5.12886 14.6946 5.99918C15.5419 6.86949 16.0179 8.04989 16.0179 9.2807V11.812H16.4286C16.8643 11.812 17.2822 11.9898 17.5902 12.3063C17.8983 12.6228 18.0714 13.052 18.0714 13.4996V18.5622Z" fill="#A0A0AB" />
                                    </svg>

                                </div>
                                <div class="col">
                                    <span class="fw-700">Your Privacy is
                                        Our Priority</span><span class="px-3">|</span>Your information will remain private
                                    &amp;
                                    secure
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 col-lg-3">
                            <button type="submit" class="btn btn-primary text-white form-control rounded-2 fw-800">
                                Submit Now
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<?php include __DIR__ . '/footer.php'; ?>
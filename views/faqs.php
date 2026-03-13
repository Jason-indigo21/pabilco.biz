<div class="tmp-faq-area tmp-section-gap">
    <div class="container">
        <div class="row">
            <div class="tmp-section-title-border text-center" data-sal="slide-up" data-sal-duration="700" data-sal-delay="100">
                <div class="pres-line-separator-wrapper text-center mb--10">
                    <div class="line-separator line-left"></div>
                    <span class="subtitle">
                        <span class="subtitle-text">FREQUENTLY ASKED QUESTIONS</span>
                    </span>
                    <div class="line-separator line-right"></div>
                </div>
                <h2 class="title w-700 tmp-title-split">FREQUENTLY ASKED QUESTIONS</h2>
                <p class="description b1 tmp-title-split-p"><?= $isEn ? "Precise Answers to Make Better Decisions" : "Respuestas claras para tomar mejores decisiones" ?></p>
            </div>
        </div>
        <div class="row g-5 align-items-center mt--20">
            <div class="col-lg-6">
                <div class="thumbnail" data-sal="slide-right" data-sal-duration="800">
                    <img class="w-100 radius" loading="lazy" src="assets/img/faqs.jpg" alt="About Images">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="tmp-accordion-style accordion" data-sal="slide-up" data-sal-duration="800">
                    <div class="accordion" id="accordionExamplea">
                        <div class="accordion-item card tmponhover">
                            <h2 class="accordion-header card-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <?= $isEn ? "What types of companies work with the consultancy?" : "¿Qué tipo de empresas trabajan con la consultora?" ?>
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExamplea">
                                <div class="accordion-body card-body">
                                    <?= $isEn ? "We work with professional services firms, e-commerce startups, healthcare, tourism, telecommunications, and personal branding organizations, among others. We accompany both SMEs and growing organizations that seek to organize their management, scale, and make better decisions." : "Trabajamos con empresas de servicios profesionales, comercio electrónico, startups, organizaciones de salud, turismo, telecomunicaciones y marcas personales, entre otros sectores. Acompañamos tanto a pymes como a organizaciones en crecimiento que buscan ordenar su gestión, escalar y tomar mejores decisiones." ?>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item card tmponhover">
                            <h2 class="accordion-header card-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <?= $isEn ? "How are they different from other consultancies?" : "¿En qué se diferencian de otras consultoras?" ?>
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExamplea">
                                <div class="accordion-body card-body">
                                    <?= $isEn ? "We differentiate ourselves with our comprehensive, practical approach. We not only define strategies but also support implementation, team adoption, and the measurement of results. We combine strategy, management, marketing, data, and technology, always aligned with the business." : "Nos diferenciamos por nuestro enfoque integral y práctico. No solo definimos estrategias, sino que también acompañamos la implementación, la adopción por parte de los equipos y la medición de resultados. Combinamos estrategia, gestión, marketing, datos y tecnología, siempre alineados con el negocio." ?>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item card tmponhover">
                            <h2 class="accordion-header card-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <?= $isEn ? "Do you work only in Uruguay?" : "¿Trabajan solo en Uruguay?" ?>
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExamplea">
                                <div class="accordion-body card-body">
                                    <?= $isEn ? "Our primary focus is on Uruguay, but we also work with companies in the region and on remote projects. The methodology and tools we use enable us to support organizations worldwide." : "Nuestro foco principal está en Uruguay, pero también trabajamos con empresas de la región y en proyectos remotos. La metodología y las herramientas que utilizamos nos permiten acompañar organizaciones independientemente de su ubicación." ?>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item card tmponhover">
                            <h2 class="accordion-header card-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    <?= $isEn ? "Do you offer one-off services or continuous accompaniment?" : "¿Ofrecen servicios puntuales o acompañamiento continuo?" ?>
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExamplea">
                                <div class="accordion-body card-body">
                                    <?= $isEn ? "Both modalities. We can work on specific projects (diagnostics, tool implementation, strategy definition) or on continuous accompaniment, serving as strategic partners to the business over time." : "Ambas modalidades. Podemos trabajar en proyectos específicos (diagnósticos, implementación de herramientas, definición de estrategia) o en acompañamientos continuos, actuando como socios estratégicos del negocio a lo largo del tiempo." ?>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item card tmponhover">
                            <h2 class="accordion-header card-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    <?= $isEn ? "Do you implement tools or do you only advise?" : "¿Implementan herramientas o solo asesoran?" ?>
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExamplea">
                                <div class="accordion-body card-body">
                                    <?= $isEn ? "We do both. We advise, design, and implement tools such as CRM, marketing automation, dashboards, management systems, and cloud solutions. Our focus is on using technology correctly and generating real value." : "Hacemos ambas cosas. Asesoramos, diseñamos e implementamos herramientas como CRM, automatización de marketing, dashboards, sistemas de gestión y soluciones cloud. Nuestro foco está en que la tecnología se utilice correctamente y genere valor real." ?>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item card tmponhover">
                            <h2 class="accordion-header card-header" id="headingSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    <?= $isEn ? "Do we need to have a high level of digital maturity to work with you?" : "¿Necesitamos un alto nivel de madurez digital para trabajar con ustedes?" ?>
                                </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExamplea">
                                <div class="accordion-body card-body">
                                    <?= $isEn ? "No. We adapt to each organization's maturity level. We accompany both companies, helping them take their first steps in digital transformation and those seeking to optimize and scale what they already have." : "No. Nos adaptamos al nivel de madurez de cada organización. Acompañamos tanto a empresas que dan sus primeros pasos en transformación digital como a aquellas que buscan optimizar y escalar lo que ya tienen." ?>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item card tmponhover">
                            <h2 class="accordion-header card-header" id="headingSeven">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                    <?= $isEn ? "What is the work process like?" : "¿Cómo es el proceso de trabajo?" ?>
                                </button>
                            </h2>
                            <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExamplea">
                                <div class="accordion-body card-body">
                                    <?php if ($isEn): ?>
                                        We start by understanding the business, its goals, and challenges. From there:<br>
                                        1.	We diagnose the current situation<br>
                                        2.	We define priorities and a clear roadmap<br>
                                        3.	We implement solutions aligned with the reality of the business<br>
                                        4.	We measure, analyse, and optimise continuously<br>
                                        We always work closely with the teams.
                                    <?php else: ?>
                                        Comenzamos por entender el negocio, sus objetivos y desafíos. A partir de ahí:<br>
                                        1.	Diagnosticamos la situación actual<br>
                                        2.	Definimos prioridades y una hoja de ruta clara<br>
                                        3.	Implementamos soluciones alineadas a la realidad del negocio<br>
                                        4.	Medimos, analizamos y optimizamos de forma continua<br>
                                        Siempre trabajamos de forma cercana con los equipos.
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item card tmponhover">
                            <h2 class="accordion-header card-header" id="headingEight">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                    <?= $isEn ? "How long do projects last?" : "¿Cuánto tiempo duran los proyectos?" ?>
                                </button>
                            </h2>
                            <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordionExamplea">
                                <div class="accordion-body card-body">
                                    <?= $isEn ? "It depends on the scope and objectives. Some projects can last weeks, while strategic accompaniments are usually medium to long-term. We define clear deadlines and deliverables from the start." : "Depende del alcance y de los objetivos. Algunos proyectos pueden durar semanas, mientras que los acompañamientos estratégicos suelen ser de mediano a largo plazo. Definimos plazos y entregables claros desde el inicio." ?>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item card tmponhover">
                            <h2 class="accordion-header card-header" id="headingNine">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                    <?= $isEn ? "How do you measure results?" : "¿Cómo miden los resultados?" ?>
                                </button>
                            </h2>
                            <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine" data-bs-parent="#accordionExamplea">
                                <div class="accordion-body card-body">
                                    <?= $isEn ? "We define key indicators (KPIs) from the outset and build clear reports to measure the impact on management, marketing, sales, and growth. We believe in data as a basis for improving decisions and results." : "Definimos indicadores clave (KPI) desde el comienzo y construimos reportes claros para medir el impacto en la gestión, el marketing, las ventas y el crecimiento. Creemos en los datos como base para mejorar las decisiones y los resultados." ?>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item card tmponhover">
                            <h2 class="accordion-header card-header" id="headingTen">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                    <?= $isEn ? "Do they work with internal teams or replace functions?" : "¿Trabajan con equipos internos o reemplazan funciones?" ?>
                                </button>
                            </h2>
                            <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen" data-bs-parent="#accordionExamplea">
                                <div class="accordion-body card-body">
                                    <?= $isEn ? "We work alongside internal teams, not replace them. Our goal is to strengthen capacities, organize processes, and leave tools and methodologies that continue to work over time." : "Trabajamos junto a los equipos internos; no los reemplazamos. Nuestro objetivo es fortalecer capacidades, ordenar procesos y dejar herramientas y metodologías que sigan funcionando con el tiempo." ?>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item card tmponhover">
                            <h2 class="accordion-header card-header" id="headingEleven">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                                    <?= $isEn ? "How can we start working together?" : "¿Cómo podemos empezar a trabajar juntos?" ?>
                                </button>
                            </h2>
                            <div id="collapseEleven" class="accordion-collapse collapse" aria-labelledby="headingEleven" data-bs-parent="#accordionExamplea">
                                <div class="accordion-body card-body">
                                    <?= $isEn ? "The first step is an initial conversation to understand your context, your goals, and your challenges. From there, we evaluate the best way to accompany you." : "El primer paso es una conversación inicial para entender tu contexto, tus objetivos y tus desafíos. A partir de ahí evaluamos la mejor forma de acompañarte." ?>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
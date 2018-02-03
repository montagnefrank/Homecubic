<div id="contacto" class="page-section p-140-cont bg-gray">
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <h2 class="section-title2 mb-45 p-0"><strong>Cont&aacute;ctanos</strong></h2>
            </div>
        </div>

        <div class="row">

            <!-- CONTACT INFO -->
            <div class="col-md-4 mb-30">

                <div class="row">
                    <div class="col-md-12 col-sm-6">
                        <div class="cis-cont">
                            <div class="cis-icon">
                                <div class="icon icon-basic-map"></div>
                            </div>
                            <div class="cis-text">
                                <h3>Direcci&oacute;n</h3>
                                <p>790 Folsom Ave, San Francisco</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 col-sm-6">
                        <div class="cis-cont">
                            <div class="cis-icon">
                                <div class="icon icon-basic-mail"></div>
                            </div>
                            <div class="cis-text">
                                <h3>Email</h3>
                                <p><a href="mailto:info@haswell.com">info@elementy.com</a></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 col-sm-6">
                        <div class="cis-cont">
                            <div class="cis-icon">
                                <div class="icon icon-basic-smartphone"></div>
                            </div>
                            <div class="cis-text">
                                <h3>Tel&eacute;fono</h3>
                                <p>1-800-312-212, 1-800-311-101</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- CONTACT FORM -->
            <div class="col-md-8">
                <div class="relative">
                    <form id="contact-form" action="#" method="POST">

                        <div class="row">

                            <div class="col-md-12">
                                <div class="row">

                                    <div class="col-md-6 mb-23">
                                        <!-- <label>Your name *</label> -->
                                        <input type="text" value="" data-msg-required="Ingresa tu nombre" maxlength="100" class="form-control " name="name" id="name" placeholder="Nombre" required>
                                    </div>

                                    <div class="col-md-6 mb-23">
                                        <!-- <label>Your email address *</label> -->
                                        <input type="email" value="" data-msg-required="Por favor dinos tu email" data-msg-email="Ingresa un email v&aacute;lido" maxlength="100" class="form-control " name="email" id="email" placeholder="Email" required>
                                    </div>

                                    <div class="col-md-6 mb-23">
                                        <!-- <label>Your email address *</label> -->
                                        <input type="text" value="" data-msg-required="Por favor dinos tu asunto"  maxlength="100" class="form-control " name="subject" id="subject" placeholder="Asunto" required>
                                    </div>

                                </div>
                            </div>

                            <div class="col-md-12">
                                <!-- <label>Message *</label> -->
                                <textarea maxlength="5000" data-msg-required="Por favor escribe tu mensaje" rows="4" class="form-control " name="message" id="message" placeholder="Mensaje" required></textarea>

                                <div class="text-right text-xxs-center">
                                    <input id="contactsubmitbtn" type="submit" value="Enviar Mensaje" class="button medium rounded gray font-open-sans mt-40" data-loading-text="Loading...">
                                </div>

                            </div>

                        </div>

                    </form>	
                    <div class="alert alert-success hidden animated pulse" id="contactSuccess">
                        Gracias por tu mensaje, muy pronto te responderemos.
                    </div>

                    <div class="alert alert-danger hidden animated shake" id="contactError">
                        <strong>Error!</strong> No pudimos enviar tu mensaje.
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
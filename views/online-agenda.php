<div class="main-content">

    <div class="tmp-contact-area tmp-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="tmp-section-title-border text-center">
                        <div class="pres-line-separator-wrapper text-center mb--10">
                            <h2 class="title w-700 mt--20 tmp-title-split"> <?php echo $isEn ? 'Online Agenda / Calendar' : 'Agenda online / Calendario'; ?></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- appoinment area start -->
        <div class="inv-appoinment-area-start tmp-section-gapBottom">
            <div class="container">
                <div class="row g-5">

                    <div class="col-lg-5">
                        <div id="agenda-calendar" style="background:#fff; border-radius:12px; box-shadow:0 4px 24px rgba(0,0,0,0.09); padding:28px; height:100%;">
                            <!-- Calendar header -->
                            <div style="display:flex; align-items:center; justify-content:space-between; margin-bottom:20px;">
                                <button type="button" id="cal-prev" style="background:none; border:1px solid #e0e0e0; border-radius:6px; width:36px; height:36px; cursor:pointer; font-size:22px; line-height:1; display:flex; align-items:center; justify-content:center; color:#444;">&#8249;</button>
                                <span id="cal-title" style="font-weight:700; font-size:17px; color:#222;"></span>
                                <button type="button" id="cal-next" style="background:none; border:1px solid #e0e0e0; border-radius:6px; width:36px; height:36px; cursor:pointer; font-size:22px; line-height:1; display:flex; align-items:center; justify-content:center; color:#444;">&#8250;</button>
                            </div>
                            <!-- Day-of-week headers -->
                            <div style="display:grid; grid-template-columns:repeat(7,1fr); text-align:center; margin-bottom:6px;">
                                <?php foreach (['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'] as $wd): ?>
                                    <span style="font-size:11px; font-weight:700; color:#aaa; letter-spacing:0.5px; padding:4px 0;"><?= $wd ?></span>
                                <?php endforeach; ?>
                            </div>
                            <!-- Day grid -->
                            <div id="cal-grid" style="display:grid; grid-template-columns:repeat(7,1fr); gap:2px; text-align:center;"></div>
                            <!-- Selected date display -->
                            <div id="cal-selected-display" style="margin-top:18px; text-align:center; font-size:13px; color:#555; min-height:18px; font-weight:600; letter-spacing:0.2px;"></div>
                        </div>
                        <script>
                            (function() {
                                var today = new Date();
                                today.setHours(0, 0, 0, 0);
                                var current = new Date(today.getFullYear(), today.getMonth(), 1);
                                var selected = null;
                                var months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];

                                function pad(n) {
                                    return String(n).padStart(2, '0');
                                }

                                function toVal(d) {
                                    return d.getFullYear() + '-' + pad(d.getMonth() + 1) + '-' + pad(d.getDate());
                                }

                                function render() {
                                    document.getElementById('cal-title').textContent = months[current.getMonth()] + ' ' + current.getFullYear();
                                    var grid = document.getElementById('cal-grid');
                                    grid.innerHTML = '';
                                    var firstDay = new Date(current.getFullYear(), current.getMonth(), 1).getDay();
                                    var daysInMonth = new Date(current.getFullYear(), current.getMonth() + 1, 0).getDate();
                                    for (var i = 0; i < firstDay; i++) {
                                        grid.appendChild(document.createElement('span'));
                                    }
                                    for (var d = 1; d <= daysInMonth; d++) {
                                        var date = new Date(current.getFullYear(), current.getMonth(), d);
                                        var cell = document.createElement('button');
                                        cell.type = 'button';
                                        cell.textContent = d;
                                        var isPast = date < today;
                                        var isToday = date.getTime() === today.getTime();
                                        var isSel = selected && date.getTime() === selected.getTime();
                                        cell.style.cssText = 'border:none; border-radius:50%; width:36px; height:36px;' +
                                            'font-size:14px; transition:background 0.15s; display:inline-flex; align-items:center; justify-content:center; margin:1px auto;' +
                                            (isPast ? 'color:#ccc; background:none; cursor:default;' :
                                                isSel ? 'background:#131c3d; color:#fff; font-weight:700; cursor:pointer;' :
                                                isToday ? 'background:#f3f3f3; color:#131c3d; font-weight:700; cursor:pointer;' :
                                                'background:none; color:#333; cursor:pointer;');
                                        if (!isPast) {
                                            (function(cell, date, isToday) {
                                                cell.addEventListener('mouseover', function() {
                                                    if (!selected || selected.getTime() !== date.getTime()) this.style.background = '#e8f0fe';
                                                });
                                                cell.addEventListener('mouseout', function() {
                                                    if (selected && selected.getTime() === date.getTime()) this.style.background = '#131c3d';
                                                    else if (isToday) this.style.background = '#f3f3f3';
                                                    else this.style.background = 'none';
                                                });
                                                cell.addEventListener('click', function() {
                                                    selected = date;
                                                    var inp = document.getElementById('appointment-date');
                                                    if (inp) inp.value = toVal(date);
                                                    document.getElementById('cal-selected-display').textContent =
                                                        'Selected: ' + months[date.getMonth()] + ' ' + date.getDate() + ', ' + date.getFullYear();
                                                    render();
                                                });
                                            })(cell, date, isToday);
                                        } else {
                                            cell.disabled = true;
                                        }
                                        grid.appendChild(cell);
                                    }
                                    if (selected) {
                                        document.getElementById('cal-selected-display').textContent =
                                            'Selected: ' + months[selected.getMonth()] + ' ' + selected.getDate() + ', ' + selected.getFullYear();
                                    }
                                }
                                // Prev navigation – cannot go before current month
                                document.getElementById('cal-prev').addEventListener('click', function() {
                                    var prev = new Date(current.getFullYear(), current.getMonth() - 1, 1);
                                    if (prev >= new Date(today.getFullYear(), today.getMonth(), 1)) {
                                        current = prev;
                                        render();
                                    }
                                });
                                document.getElementById('cal-next').addEventListener('click', function() {
                                    current = new Date(current.getFullYear(), current.getMonth() + 1, 1);
                                    render();
                                });
                                // Sync when user types in the date input
                                var inp = document.getElementById('appointment-date');
                                if (inp) {
                                    inp.addEventListener('change', function() {
                                        if (this.value) {
                                            var p = this.value.split('-');
                                            var d = new Date(+p[0], +p[1] - 1, +p[2]);
                                            if (d >= today) {
                                                selected = d;
                                                current = new Date(d.getFullYear(), d.getMonth(), 1);
                                                render();
                                            }
                                        }
                                    });
                                }
                                render();
                            })();
                        </script>
                    </div>
                    <div class="col-lg-7">
                        <form class="contact-form-1 appoinment-form-wrapper tmponhover " id="contact-form" method="POST" action="calendarmailFunction.php">
                            <?php
                            if (session_status() === PHP_SESSION_NONE) {
                                session_start();
                            }
                            if (empty($_SESSION['csrf_token'])) {
                                $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
                            }
                            $CAPTCHA_ENABLED = true;
                            if ($CAPTCHA_ENABLED && empty($_SESSION['agenda_captcha_text'])) {
                                $captchaChars = 'ABCDEFGHJKLMNPQRSTUVWXYZabcdefghijkmnopqrstuvwxyz23456789';
                                $captchaText = '';
                                for ($i = 0; $i < 6; $i++) {
                                    $captchaText .= $captchaChars[random_int(0, strlen($captchaChars) - 1)];
                                }
                                $_SESSION['agenda_captcha_text'] = $captchaText;
                            }
                            ?>
                            <input type="hidden" name="csrf_token" value="<?= htmlspecialchars($_SESSION['csrf_token']) ?>">
                            <input type="hidden" name="lang" value="<?= $isEn ? 'en' : 'es' ?>">
                            <div class="form-group-wrapper">
                                <div class="form-group tmponhover">
                                    <input type="text" name="name" id="contact-name" placeholder="<?= $isEn ? 'Your Name' : 'Tu Nombre' ?>" required="">
                                </div>
                                <div class="form-group tmponhover">
                                    <input type="tel" name="phone" id="contact-phone" placeholder="<?= $isEn ? 'Phone Number' : 'Numero de Telefono' ?>">
                                </div>
                            </div>
                            <div class="form-group tmponhover">
                                <input type="email" id="contact-email" name="email" placeholder="<?= $isEn ? 'Your Email' : 'Tu Correo' ?>" required="">
                            </div>

                            <div class="form-group tmponhover">
                                <input type="text" id="subject" name="subject" placeholder="<?= $isEn ? 'Your Subject' : 'Tu Asunto' ?>">
                            </div>

                            <div class="form-group-wrapper">
                                <div class="form-group tmponhover">
                                    <label for="appointment-date" style="font-size:13px; color:#888; margin-bottom:4px; display:block;"><?= $isEn ? 'Preferred Date' : 'Fecha Preferida' ?></label>
                                    <input type="date" id="appointment-date" name="appointment-date"
                                        min="<?= date('Y-m-d') ?>"
                                        style="width:100%; padding:12px 16px; border:1px solid #e0e0e0; border-radius:6px; font-size:15px; background:#fff; color:#333; outline:none;">
                                </div>
                                <div class="form-group tmponhover">
                                    <label for="appointment-time" style="font-size:13px; color:#888; margin-bottom:4px; display:block;"><?= $isEn ? 'Preferred Time' : 'Hora Preferida' ?></label>
                                    <input type="time" id="appointment-time" name="appointment-time"
                                        min="08:00" max="18:00"
                                        style="width:100%; padding:12px 16px; border:1px solid #e0e0e0; border-radius:6px; font-size:15px; background:#fff; color:#333; outline:none;">
                                </div>
                            </div>

                            <div class="form-group tmponhover">
                                <textarea name="message" id="contact-message" placeholder="<?= $isEn ? 'Your Message' : 'Tu Mensaje' ?>"></textarea>
                            </div>

                            <div class="form-group tmponhover">
                                <input type="text" id="captcha_mail" name="captcha" hidden>
                                <div class="col">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group ">
                                                <input type="text" class="form-control text-3 custom-border-color-grey-1 h-auto py-2" id="submit"
                                                    placeholder="<?= $isEn ? 'Captcha' : 'Captcha' ?>" />
                                            </div>
                                        </div>
                                        <div class="col-md-1 mt-2 text-center">
                                            <div onclick="generate()">
                                                <i class="feather-refresh-cw"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <input type="text" class="form-control text-3 custom-border-color-grey-1 h-auto py-2"
                                                    style="text-decoration:line-through;text-align:center; font-style: italic; display:block;"
                                                    id="captchandler" disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-3 ml-2">
                                            <button type="button" id="btnCheck" class="btn-default btn-large tmp-btn" style="width: 100%;"
                                                onclick="printmsg()">
                                                <?= $isEn ? 'Check' : 'Verificar' ?> </button>
                                        </div>
                                    </div>
                                    <p id="key" style="color:green; font-weight:bold; padding:10px 5px;"></p>
                                </div>
                            </div>

                            <div class="form-group tmponhover">
                                <button name="submit" type="submit" id="submit" class="btn-default btn-large tmp-btn" style="width: 100%;">
                                    <span><?= $isEn ? 'Submit Now' : 'Enviar Ahora' ?></span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- appoinment area end -->

    </div>
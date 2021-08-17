<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width" />
        <title>Airmail Ping</title>
        <style type="text/css">
            /* -------------------------------------
                GLOBAL
                A very basic CSS reset
            ------------------------------------- */

            * {
                margin: 0;
                padding: 0;
                font-family: "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;
                box-sizing: border-box;
                font-size: 14px;
            }

            img {
                max-width: 100%;
            }

            body {
                -webkit-font-smoothing: antialiased;
                -webkit-text-size-adjust: none;
                width: 100% !important;
                height: 100%;
                line-height: 1.6;
            }

            /* Let's make sure all tables have defaults */

            table td {
                vertical-align: top;
            }

            /* -------------------------------------
    BODY & CONTAINER
------------------------------------- */

            body {
                background-color: #f6f6f6;
            }

            .body-wrap {
                background-color: #f6f6f6;
                width: 100%;
            }

            .container {
                display: block !important;
                max-width: 600px !important;
                margin: 0 auto !important;
                /* makes it centered */
                clear: both !important;
            }

            .content {
                max-width: 600px;
                margin: 0 auto;
                display: block;
                padding: 20px;
            }

            /* -------------------------------------
    HEADER, FOOTER, MAIN
------------------------------------- */

            .main {
                background: #fff;
                border: 1px solid #e9e9e9;
                border-radius: 3px;
            }

            .content-wrap {
                padding: 20px;
            }

            .content-block {
                padding: 0 0 20px;
            }

			.box-random {
				padding: 10px;
				background-color: #f2f2f2;
				border-left: 1px solid #ccc;
				border-right: 1px solid #ccc;
				border-top: 1px solid #ccc;
				border-bottom: 1px solid #ccc;
			}

			.x_mb_text {
				font-size: 18px;
				line-height: 21px;
				color: #141823;
			}

			.btn-password {
				border-collapse: collapse;
				border-radius: 5px;
				text-align: center;
				display: block;
				border: solid 1px #344c80;
				background: #23527c;
				padding: 10px 20px 10px 20px;
			}

            .header {
                width: 100%;
                margin-bottom: 20px;
            }

            .footer {
                width: 100%;
                clear: both;
                color: #999;
                padding: 20px;
            }

            .footer a {
                color: #999;
            }

            .footer p,
            .footer a,
            .footer unsubscribe,
            .footer td {
                font-size: 12px;
            }

            /* -------------------------------------
    TYPOGRAPHY
------------------------------------- */

            h1,
            h2,
            h3 {
                font-family: "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
                color: #000;
                margin: 20px 0 0 !important;
                line-height: 1.2;
                font-weight: 400;
            }

            h1 {
                font-size: 32px;
                font-weight: 500;
            }

            h2 {
                font-size: 24px;
            }

            h3 {
                font-size: 18px;
            }

            h4 {
                font-size: 14px;
                font-weight: 600;
            }

            p,
            ul,
            ol {
                margin-bottom: 10px;
                font-weight: normal;
            }

            p li,
            ul li,
            ol li {
                margin-left: 5px;
                list-style-position: inside;
            }

            /* -------------------------------------
    LINKS & BUTTONS
------------------------------------- */

            a {
                color: #29aba4;
                text-decoration: underline;
            }

            .btn-primary {
                text-decoration: none;
                color: #FFF !important;
                background-color: #29aba4;
                border: solid #29aba4;
                border-width: 5px 10px;
                line-height: 2;
                font-weight: bold;
                text-align: center;
                cursor: pointer;
                display: inline-block;
                border-radius: 5px;
                text-transform: capitalize;
            }

            /* -------------------------------------
    OTHER STYLES THAT MIGHT BE USEFUL
------------------------------------- */

            .last {
                margin-bottom: 0;
            }

            .first {
                margin-top: 0;
            }

            .aligncenter {
                text-align: center;
            }

            .alignright {
                text-align: right;
            }

            .alignleft {
                text-align: left;
            }

            .clear {
                clear: both;
            }

            /* -------------------------------------
    ALERTS
    Change the class depending on warning email, good email or bad email
------------------------------------- */

            .alert {
                font-size: 16px;
                color: #fff;
                font-weight: 500;
                padding: 20px;
                text-align: center;
                border-radius: 3px 3px 0 0;
            }

            .alert a {
                color: #fff;
                text-decoration: none;
                font-weight: 500;
                font-size: 16px;
            }

            .alert.alert-warning {
                background: #f8ac59;
            }

            .alert.alert-bad {
                background: #ed5565;
            }

            .alert.alert-good {
                background: #29aba4;
            }

            /* -------------------------------------
    INVOICE
    Styles for the billing table
------------------------------------- */

            .invoice {
                margin: 40px auto;
                text-align: left;
                width: 80%;
            }

            .invoice td {
                padding: 5px 0;
            }

            .invoice .invoice-items {
                width: 100%;
            }

            .invoice .invoice-items td {
                border-top: #eee 1px solid;
            }

            .invoice .invoice-items .total td {
                border-top: 2px solid #333;
                border-bottom: 2px solid #333;
                font-weight: 700;
            }
            .box-random{
                padding:10px;
                background-color:#f2f2f2;
                border:1px solid #ccc;
                text-align:center;
            }
            .box-random span{
                font-weight: 700;
                font-size:25px;
                letter-spacing: 7px;
                line-height:21px;
                color:#141823
            }
        </style>

        <style type="text/css" media="only screen">
            /* -------------------------------------
    RESPONSIVE AND MOBILE FRIENDLY STYLES
------------------------------------- */

            @media only screen and (max-width: 640px) {
                h1,
                h2,
                h3,
                h4 {
                    font-weight: 600 !important;
                    margin: 20px 0 5px !important;
                }

                h1 {
                    font-size: 22px !important;
                }

                h2 {
                    font-size: 18px !important;
                }

                h3 {
                    font-size: 16px !important;
                }

                .container {
                    width: 100% !important;
                }

                .content,
                .content-wrap {
                    padding: 10px !important;
                }

                .invoice {
                    width: 100% !important;
                }
            }
        </style>
    </head>

    <body bgcolor="#ffffff">

        <table class="body-wrap">
            <tr>
                <td></td>
                <td class="container" width="600">
                    <div class="content">
                        <table class="main" width="100%" cellpadding="0" cellspacing="0">
                            <tr>
                                <td class="content-wrap">
                                    <table cellpadding="0" cellspacing="0">
                                        <tr>
                                            <td style="text-align:center">
                                                <img alt="" src="http://desarrollo.nacion-digital.com/panel/AMT-2/ta-views/assets/images/logo.png" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="content-block">
                                                <h3>Estimado(a): {{full_names}}</h3>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="content-block">
												{{message}}
											</td>
										</tr>
										<tr>
											<td class="content-block ">
												<span class=' box-random x_mb_text'>
													{{random}}
												</span>
											</td>
										</tr>
										<tr>
											<td class="content-block">
												<p>También puedes cambiar la contraseña directamente.</p>
												<table cellspacing='0' cellpadding='0'>
													<tbody>
														<tr>
															<td class="btn-password" >
																<a href='{{url}}' target='_blank' style='text-decoration:none'>
																	<span style='white-space:nowrap; font-weight:bold; vertical-align:middle; color:#ffffff; font-size:14px; line-height:14px'>
																		Cambiar contraseña
																	</span>
																</a>
															</td>
														</tr>
													</tbody>
												</table>
										    </td>
                                        </tr>
                                        <tr>
                                            <td class="content-block">
                                               <div>
                                                   <span style='color:#333333; font-weight:bold'>¿No solicitaste este cambio?</span>
                                                </div>
												Si no solicitaste una nueva contraseña, 
												<a href='https://artias-soft.com/#page_contactanos' target='_blank' rel='noopener noreferrer' data-auth='NotApplicable' style='color:#3b5998; text-decoration:none'>
												    avísanos.
												</a>
												</span>
										    </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                        <!-- start footer -->
                        <div class="footer">
                            <table width="100%">
                                <tr>
                                    <td class="aligncenter content-block">
                                        Este mensaje se envió a {{customer_email}}.<br>
                                        Soporte: <a href="https://artias-soft.com/" target='_blank'>artias-soft.com</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </td>
                <td></td>
            </tr>
        </table>
    </body>

</html>

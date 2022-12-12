<!DOCTYPE html>
<html>
<head>
<title>{{config('app.name')}}</title>
<?php $SiteSettings = DB::table('_site_settings')->get(); ?>
@foreach($SiteSettings as $Settings)
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<style type="text/css">
    /* CLIENT-SPECIFIC STYLES */
    body, table, td, a{-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%;} /* Prevent WebKit and Windows mobile changing default text sizes */
    table, td{mso-table-lspace: 0pt; mso-table-rspace: 0pt;} /* Remove spacing between tables in Outlook 2007 and up */
    img{-ms-interpolation-mode: bicubic;} /* Allow smoother rendering of resized image in Internet Explorer */

    /* RESET STYLES */
    img{border: 0; height: auto; line-height: 100%; outline: none; text-decoration: none;}
    table{border-collapse: collapse !important;}
    body{height: 100% !important; margin: 0 !important; padding: 0 !important; width: 100% !important;}

    /* iOS BLUE LINKS */
    a[x-apple-data-detectors] {
        color: inherit !important;
        text-decoration: none !important;
        font-size: inherit !important;
        font-family: inherit !important;
        font-weight: inherit !important;
        line-height: inherit !important;
    }

    /* MOBILE STYLES */
    @media screen and (max-width: 525px) {

        /* ALLOWS FOR FLUID TABLES */
        .wrapper {
          width: 100% !important;
            max-width: 100% !important;
        }

        /* ADJUSTS LAYOUT OF LOGO IMAGE */
        .logo img {
          margin: 0 auto !important;
        }

        /* USE THESE CLASSES TO HIDE CONTENT ON MOBILE */
        .mobile-hide {
          display: none !important;
        }

        .img-max {
          max-width: 100% !important;
          width: 100% !important;
          height: auto !important;
        }

        /* FULL-WIDTH TABLES */
        .responsive-table {
          width: 100% !important;
        }

        /* UTILITY CLASSES FOR ADJUSTING PADDING ON MOBILE */
        .padding {
          padding: 10px 5% 15px 5% !important;
        }

        .padding-meta {
          padding: 30px 5% 0px 5% !important;
          text-align: center;
        }

        .padding-copy {
             padding: 10px 5% 10px 5% !important;
          text-align: center;
        }

        .no-padding {
          padding: 0 !important;
        }

        .section-padding {
          padding: 50px 15px 50px 15px !important;
        }

        /* ADJUST BUTTONS ON MOBILE */
        .mobile-button-container {
            margin: 0 auto;
            width: 100% !important;
        }

        .mobile-button {
            padding: 15px !important;
            border: 0 !important;
            font-size: 16px !important;
            display: block !important;
        }

    }

    /* ANDROID CENTER FIX */
    div[style*="margin: 16px 0;"] { margin: 0 !important; }
</style>
</head>
<body style="margin: 0 !important; padding: 0 !important;">



<!-- HEADER -->
<table border="0" cellpadding="0" cellspacing="0" width="100%" style="border:5px solid #bf9d34">
    <tr>
        <td bgcolor="#000000" align="center">
            <!--[if (gte mso 9)|(IE)]>
            <table align="center" border="0" cellspacing="0" cellpadding="0" width="500">
            <tr>
            <td align="center" valign="top" width="500">
            <![endif]-->
            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 500px;" class="wrapper">
                <tr>
                    <td align="center" valign="top" style="padding: 15px 0;" class="logo">
                        <a href="{{url('/')}}" target="_blank">
                            <img alt="Premium Homes" src="https://premiumhomes.casa/theme/images/logo-kubwa.png" width="160" style="display: block; font-family: Helvetica, Arial, sans-serif; color: #ffffff; font-size: 16px;" border="0">
                        </a>
                    </td>
                </tr>
            </table>
            <!--[if (gte mso 9)|(IE)]>
            </td>
            </tr>
            </table>
            <![endif]-->
        </td>
    </tr>
    <tr>
        <td bgcolor="#000000" align="center" style="padding: 15px;">
            <!--[if (gte mso 9)|(IE)]>
            <table align="center" border="0" cellspacing="0" cellpadding="0" width="500">
            <tr>
            <td align="center" valign="top" width="500">
            <![endif]-->
            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 500px;" class="responsive-table">
                <tr>
                    <td>
                        <!-- COPY -->
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td align="center" style="font-size: 20px; font-family: Helvetica, Arial, sans-serif; color: #bf9d34; padding-top: 30px;" class="padding-copy">Invoice Number: {{$Invoice->invoice_number}}</td>
                            </tr>
                            <tr>
                                <td align="left" style="padding: 20px 0 0 0; font-size: 16px; line-height: 25px; font-family: Helvetica, Arial, sans-serif; color: #666666;" class="padding-copy">
                                    Hello, {{$name}},<br>
                                    You’ve made a subscription purchase from Premium Business Den Limited. <br>
                                    You will be automatically charged Ksh {{$Invoice->amount}} for 1 month on {{date('d.m.Y',strtotime($Invoice->due))}}, unless you cancel. <br>
                                    You can cancel at any time. <a href="https://premiumhomes.casa/vendors/">Manage your subscriptions</a>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
            <!--[if (gte mso 9)|(IE)]>
            </td>
            </tr>
            </table>
            <![endif]-->
        </td>
    </tr>
    <tr>
        <td bgcolor="#000000" align="center" style="padding: 15px;" class="padding">
            <!--[if (gte mso 9)|(IE)]>
            <table align="center" border="0" cellspacing="0" cellpadding="0" width="500">
            <tr>
            <td align="center" valign="top" width="500">
            <![endif]-->
            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 500px;" class="responsive-table">

                <tr>
                    <td>
                        <!-- TWO COLUMNS -->
                        <table cellspacing="0" cellpadding="0" border="0" width="100%">

                            <tr>
                                <td valign="top" style="padding: 0;" class="mobile-wrapper">
                                    <!-- LEFT COLUMN -->
                                    <table cellpadding="0" cellspacing="0" border="0" width="47%" style="width: 47%;" align="left">
                                        <tr>
                                            <td style="padding: 0 0 10px 0;">
                                                <table cellpadding="0" cellspacing="0" border="0" width="100%">
                                                    <tr>
                                                        <td align="left" style="font-family: Arial, sans-serif; color: #aaaaaa; font-size: 16px;">Item</td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                    <!-- RIGHT COLUMN -->
                                    <table cellpadding="0" cellspacing="0" border="0" width="47%" style="width: 47%;" align="right">
                                        <tr>
                                            <td style="padding: 0 0 10px 0;">
                                                <table cellpadding="0" cellspacing="0" border="0" width="100%">
                                                    <tr>
                                                        <td align="right" style="font-family: Arial, sans-serif; color: #aaaaaa; font-size: 16px;">Price</td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td>
                        <!-- TWO COLUMNS -->
                        <table cellspacing="0" cellpadding="0" border="0" width="100%">
                            <tr>
                                <td valign="top" style="padding: 0;" class="mobile-wrapper">
                                    <!-- LEFT COLUMN -->
                                    <table cellpadding="0" cellspacing="0" border="0" width="47%" style="width: 47%;" align="left">
                                        <tr>
                                            <td style="padding: 0 0 10px 0;">
                                                <table cellpadding="0" cellspacing="0" border="0" width="100%">
                                                    <tr>
                                                        <td align="left" style="font-family: Arial, sans-serif; color: #aaaaaa; font-size: 16px;">
                                                            {{$Invoice->content}} X ({{$Invoice->qty}})
                                                        </td>

                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                    <!-- RIGHT COLUMN -->
                                    <table cellpadding="0" cellspacing="0" border="0" width="47%" style="width: 47%;" align="right">
                                        <tr>
                                            <td style="padding: 0 0 10px 0;">
                                                <table cellpadding="0" cellspacing="0" border="0" width="100%">
                                                    <tr>
                                                        <td align="right" style="font-family: Arial, sans-serif; color: #aaaaaa; font-size: 16px;">
                                                            KES{{$Invoice->amount}}
                                                        </td>

                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td style="padding: 10px 0 0px 0; border-top: 1px solid #eaeaea; border-bottom: 1px dashed #aaaaaa;">
                        <!-- TWO COLUMNS -->
                        <table cellspacing="0" cellpadding="0" border="0" width="100%">
                            <tr>
                                <td valign="top" class="mobile-wrapper">
                                    <!-- LEFT COLUMN -->
                                    <table cellpadding="0" cellspacing="0" border="0" width="47%" style="width: 47%;" align="left">
                                        <tr>
                                            <td style="padding: 0 0 10px 0;">
                                                <table cellpadding="0" cellspacing="0" border="0" width="100%">
                                                    <tr>
                                                        <td align="left" style="font-family: Arial, sans-serif; color: #aaaaaa; font-size: 16px; font-weight: bold;">V.A.T</td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                    <!-- RIGHT COLUMN -->
                                    <table cellpadding="0" cellspacing="0" border="0" width="47%" style="width: 47%;" align="right">
                                        <tr>
                                            <td>
                                                <table cellpadding="0" cellspacing="0" border="0" width="100%">
                                                    <tr>
                                                        <td align="right" style="font-family: Arial, sans-serif; color: #bf9d34; font-size: 16px; font-weight: bold;"> 0.00</td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                        <table cellspacing="0" cellpadding="0" border="0" width="100%">
                            <tr>
                                <td valign="top" class="mobile-wrapper">
                                    <!-- LEFT COLUMN -->
                                    <table cellpadding="0" cellspacing="0" border="0" width="47%" style="width: 47%;" align="left">
                                        <tr>
                                            <td style="padding: 0 0 10px 0;">
                                                <table cellpadding="0" cellspacing="0" border="0" width="100%">
                                                    <tr>
                                                        <td align="left" style="font-family: Arial, sans-serif; color: #aaaaaa; font-size: 16px; font-weight: bold;">Total</td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                    <!-- RIGHT COLUMN -->
                                    <table cellpadding="0" cellspacing="0" border="0" width="47%" style="width: 47%;" align="right">
                                        <tr>
                                            <td>
                                                <table cellpadding="0" cellspacing="0" border="0" width="100%">
                                                    <tr>
                                                        <td align="right" style="font-family: Arial, sans-serif; color: #bf9d34; font-size: 16px; font-weight: bold;">KES {{$Invoice->amount}}</td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
            <!--[if (gte mso 9)|(IE)]>
            </td>
            </tr>
            </table>
            <![endif]-->
        </td>
    </tr>
    <tr>
        <td bgcolor="#000000" align="center" style="padding: 15px;">
            <!--[if (gte mso 9)|(IE)]>
            <table align="center" border="0" cellspacing="0" cellpadding="0" width="500">
            <tr>
            <td align="center" valign="top" width="500">
            <![endif]-->
            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 500px;" class="responsive-table">
                <tr>
                    <td>
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td>
                                    <!-- COPY -->
                                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                        <tr>
                                            <td align="left" style="padding: 0 0 0 0; font-size: 10px; line-height: 18px; font-family: Helvetica, Arial, sans-serif; color: #333333; font-style: italic; text-align:center;" class="padding-copy">
                                                This is a system generated Invoice, Generated on {{date('d.m.Y', strtotime($Invoice->created_at))}}
                                                <br>
                                                By subscribing, you authorise us to charge you the subscription cost (as described above) automatically, charged to the payment method provided until cancelled. Learn how to cancel. Keep this for your records.
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
            <!--[if (gte mso 9)|(IE)]>
            </td>
            </tr>
            </table>
            <![endif]-->
        </td>
    </tr>

    <tr>
        <td bgcolor="#000000" align="center" style="padding: 20px 0px;">
            <!--[if (gte mso 9)|(IE)]>
            <table align="center" border="0" cellspacing="0" cellpadding="0" width="500">
            <tr>
            <td align="center" valign="top" width="500">
            <![endif]-->
            <!-- UNSUBSCRIBE COPY -->
            <table width="100%" border="0" cellspacing="0" cellpadding="0" align="center" style="max-width: 500px;" class="responsive-table">
                <tr>
                    <td align="center" style="font-size: 12px; line-height: 18px; font-family: Helvetica, Arial, sans-serif; color:#666666;">
                        <?php $SiteSettings = DB::table('_site_settings')->get() ?>
                        @foreach($SiteSettings as $Set)
                        {{$Set->location}}
                        <br>
                        {{$Set->mobile_one}} | {{$Set->mobile_two}}
                        <br>
                        <a href="{{url('/')}}" target="_blank" style="color: #666666; text-decoration: none;">{{$Set->sitename}}</a>
                        <span style="font-family: Arial, sans-serif; font-size: 12px; color: #444444;">&nbsp;&nbsp;|&nbsp;&nbsp;</span>
                        <a href="https://www.designekta.com/" target="_blank" style="color: #666666; text-decoration: none;">{{$Set->address}}</a>
                        @endforeach
                    </td>
                </tr>
            </table>
            <!--[if (gte mso 9)|(IE)]>
            </td>
            </tr>
            </table>
            <![endif]-->
        </td>
    </tr>
</table>
@endforeach
</body>
</html>

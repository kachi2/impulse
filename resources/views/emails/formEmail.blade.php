<div width="100%" style="margin:0;padding:0!important;background-color:#f5f6fa">
    <span style="width:100%;background-color:#f5f6fa">
        <table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#f5f6fa">
            <tbody>
                <tr>
                    <td style="padding:30px 0">
                        <table style="width:100%;max-width:620px;margin:0 auto">
                            <tbody>
                                <tr>
                                    <td style="text-align:center;padding-bottom:15px">
                                        <img style="max-height:50px;width:auto"
                                            src="{{ asset('assets/' . $settings->logo) }}"
                                            alt="{{ $settings->site_name }}" class="CToWUd">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <table style="width:100%;max-width:620px;margin:0 auto;background-color:#ffffff">
                            <tbody>
                                <tr>
                                    <td style="padding:10px 30px 10px">
                                        User Details Below
                                    </td>
                                <tr>
                                    <td style="padding:0 30px">
                                        <p>User Details</p>
                                        <table width="100%">
                                            <tbody>
                                                <tr>
                                                    <td width="150">Name</td>
                                                    <td width="25">&nbsp;&nbsp;:&nbsp;&nbsp;</td>
                                                    <td>{{ $data['name'] }}</td>
                                                </tr>
                                                <tr>
                                                    <td width="150">Email</td>
                                                    <td width="25">&nbsp;&nbsp;:&nbsp;&nbsp;</td>
                                                    <td> {{ $data['email'] }}</td>
                                                </tr>
                                                <tr>
                                                    <td width="150">Phone</td>
                                                    <td width="25">&nbsp;&nbsp;:&nbsp;&nbsp;</td>
                                                    <td> {{ $data['phone'] }}</td>
                                                <tr>
                                                {{-- <tr>
                                                    <td width="150">Resume</td>
                                                    <td width="25">&nbsp;&nbsp;:&nbsp;&nbsp;</td>
                                                    <td> <a href="{{ asset('images/' . $data['resume']) }}"
                                                            download=""> Download Resume</a></td>
                                                <tr> --}}
                                                <tr>
                                                    <td width="150">Consent Form</td>
                                                    <td width="25">&nbsp;&nbsp;:&nbsp;&nbsp;</td>
                                                    <td> @if(isset($data['document'])) <a href="{{ asset('images/' . $data['document']) }}"
                                                            download=""> Download Consent Form</a> @endif</td>
                                                <tr>
                                                {{-- <tr>
                                                    <td width="150">Personal Statement</td>
                                                    <td width="25">&nbsp;&nbsp;:&nbsp;&nbsp;</td>
                                                    <td> <a href="{{ asset('images/'.$data['personal_statement']) }}"
                                                            download=""> Download Personal Statement</a></td>
                                                <tr> --}}

                                            </tbody>
                                        </table>
                                        <table style="width:100%;max-width:620px;margin:0 auto">
                                            <tbody>
                                                <tr>
                                                    <td style="text-align:center;padding:25px 20px 0">
                                                        <p style="font-size:13px">{{ $settings->site_name }} ©
                                                            {{ Date('Y') }}.</p>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
    </span>
    <div class="yj6qo"></div>
    <div class="adL">
    </div>
</div>

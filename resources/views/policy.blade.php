@extends('layouts.app')

@section('title', 'Terms & Privacy')

@section('content')
<?php

use App\Models\PolicyPage;

$policyData = PolicyPage::first(); ?>
<div class="terms-page-img">
    <section class="hero-inner">
        @include('includes.nav')

        <div class="container d-flex align-items-center justify-content-center">
            <h2 class="text-center text-light">
                {{ $policyData && !empty($policyData->p_hero)
                    ? '"' . $policyData->p_hero . '."'
                    : '"Our terms outline the guidelines for using our services to ensure transparency, security, and a smooth experience for all users."'
                }}
            </h2>
        </div>
    </section>

    <section class="terms text-center py-5">
        <div class="container">
            <img src="{{ $policyData?->image_content ?: asset('assets/images/small-logo-colored.png') }}" alt="" class="mb-3" style="width: 150px;">
            <h2 class="text-center mb-4 fw-bold text-capitalize">
                {{ $policyData && !empty($policyData->sub_title_content)
                    ? $policyData->sub_title_content
                    : 'Terms & Privacy Policy'
                }}
            </h2>
            <div class="row justify-content-center text-end mt-4">
                <div class="col-md-6 mb-3">
                    <ul class="list-unstyled">
                        <li class="mb-md-4 mb-2 fw-semibold fs-4">
                            {{ $policyData && !empty($policyData->text) && isset($policyData->text[0])
                ? $policyData->text[0]
                : 'Use of Service: Users must access and use the service responsibly and in accordance with all applicable laws.'
            }}
                        </li>
                        <li class="mb-md-4 mb-2 fw-semibold fs-4">
                            {{ $policyData && !empty($policyData->text) && isset($policyData->text[1])
                ? $policyData->text[1]
                : 'User Responsibilities: Users must provide accurate information and maintain the confidentiality of their account'
            }}
                        </li>
                        <li class="mb-md-4 mb-2 fw-semibold fs-4">
                            {{ $policyData && !empty($policyData->text) && isset($policyData->text[2])
                ? $policyData->text[2]
                : 'Service Modifications: We reserve the right to update or modify the service at any time to improve performance.'
            }}
                        </li>
                        <li class="mb-md-4 mb-2 fw-semibold fs-4">
                            {{ $policyData && !empty($policyData->text) && isset($policyData->text[3])
                ? $policyData->text[3]
                : 'Limitation of Liability: We are not responsible for losses resulting from misuse of the service or external factors beyond our control.'
            }}
                        </li>
                    </ul>
                </div>

                <div class="col-md-6 mb-3">
                    <ul class="list-unstyled">
                        <li class="mb-md-4 mb-2 fw-semibold fs-4">
                            {{ $policyData && !empty($policyData->text) && isset($policyData->text[4])
                ? $policyData->text[4]
                : 'Data Privacy: We collect and process personal information securely and only for operational purposes.'
            }}
                        </li>
                        <li class="mb-md-4 mb-2 fw-semibold fs-4">
                            {{ $policyData && !empty($policyData->text) && isset($policyData->text[5])
                ? $policyData->text[5]
                : 'Intellectual Property: All content, branding, and materials on the platform are protected and must not be copied or reused without permission.'
            }}
                        </li>
                        <li class="mb-md-4 mb-2 fw-semibold fs-4">
                            {{ $policyData && !empty($policyData->text) && isset($policyData->text[6])
                ? $policyData->text[6]
                : 'Payment & Billing: All fees must be paid on time, and refunds follow our stated policy.'
            }}
                        </li>
                        <li class="mb-md-4 mb-2 fw-semibold fs-4">
                            {{ $policyData && !empty($policyData->text) && isset($policyData->text[7])
                ? $policyData->text[7]
                : 'Cookies Policy: We use cookies to enhance user experience and analyze performance.'
            }}
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </section>
</div>

@include('includes.footer')

@endsection
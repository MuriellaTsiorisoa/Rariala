<!DOCTYPE html>
<html
  data-wf-page="661e71d9d368b4abbbe9718c"
  data-wf-site="65e18c7f1e395b37dc7bbc49"
  data-wf-status="1"
  lang="en"
>
  <head>
    <meta charset="utf-8" />
    <title> Inscription </title>
  </head>
@include('nav')
    <div class="page-wrapper">
      <div class="global-styles w-embed">
        <style>
          /* Make text look crisper and more legible in all browsers */
          body {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            font-smoothing: antialiased;
            text-rendering: optimizeLegibility;
          }

          /* Focus state style for keyboard navigation for the focusable elements */
          *[tabindex]:focus-visible,
          input[type="file"]:focus-visible {
            outline: 0.125rem solid #4d65ff;
            outline-offset: 0.125rem;
          }

          /* Set color style to inherit */
          .inherit-color * {
            color: inherit;
          }

          /* Get rid of top margin on first element in any rich text element */
          .w-richtext > :not(div):first-child,
          .w-richtext > div:first-child > :first-child {
            margin-top: 0 !important;
          }

          /* Get rid of bottom margin on last element in any rich text element */
          .w-richtext > :last-child,
          .w-richtext ol li:last-child,
          .w-richtext ul li:last-child {
            margin-bottom: 0 !important;
          }

          /* Make sure containers never lose their center alignment */
          .container-medium,
          .container-small,
          .container-large {
            margin-right: auto !important;
            margin-left: auto !important;
          }

          /* 
Make the following elements inherit typography styles from the parent and not have hardcoded values. 
Important: You will not be able to style for example "All Links" in Designer with this CSS applied.
Uncomment this CSS to use it in the project. Leave this message for future hand-off.
*/
          /*
a,
.w-input,
.w-select,
.w-tab-link,
.w-nav-link,
.w-dropdown-btn,
.w-dropdown-toggle,
.w-dropdown-link {
 color: inherit;
 text-decoration: inherit;
 font-size: inherit;
}
*/

          /* Apply "..." after 3 lines of text */
          .text-style-3lines {
            display: -webkit-box;
            overflow: hidden;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
          }

          /* Apply "..." after 2 lines of text */
          .text-style-2lines {
            display: -webkit-box;
            overflow: hidden;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
          }

          /* Adds inline flex display */
          .display-inlineflex {
            display: inline-flex;
          }

          /* These classes are never overwritten */
          .hide {
            display: none !important;
          }

          @media screen and (max-width: 991px) {
            .hide,
            .hide-tablet {
              display: none !important;
            }
          }
          @media screen and (max-width: 767px) {
            .hide-mobile-landscape {
              display: none !important;
            }
          }
          @media screen and (max-width: 479px) {
            .hide-mobile {
              display: none !important;
            }
          }

          .margin-0 {
            margin: 0rem !important;
          }

          .padding-0 {
            padding: 0rem !important;
          }

          .spacing-clean {
            padding: 0rem !important;
            margin: 0rem !important;
          }

          .margin-top {
            margin-right: 0rem !important;
            margin-bottom: 0rem !important;
            margin-left: 0rem !important;
          }

          .padding-top {
            padding-right: 0rem !important;
            padding-bottom: 0rem !important;
            padding-left: 0rem !important;
          }

          .margin-right {
            margin-top: 0rem !important;
            margin-bottom: 0rem !important;
            margin-left: 0rem !important;
          }

          .padding-right {
            padding-top: 0rem !important;
            padding-bottom: 0rem !important;
            padding-left: 0rem !important;
          }

          .margin-bottom {
            margin-top: 0rem !important;
            margin-right: 0rem !important;
            margin-left: 0rem !important;
          }

          .padding-bottom {
            padding-top: 0rem !important;
            padding-right: 0rem !important;
            padding-left: 0rem !important;
          }

          .margin-left {
            margin-top: 0rem !important;
            margin-right: 0rem !important;
            margin-bottom: 0rem !important;
          }

          .padding-left {
            padding-top: 0rem !important;
            padding-right: 0rem !important;
            padding-bottom: 0rem !important;
          }

          .margin-horizontal {
            margin-top: 0rem !important;
            margin-bottom: 0rem !important;
          }

          .padding-horizontal {
            padding-top: 0rem !important;
            padding-bottom: 0rem !important;
          }

          .margin-vertical {
            margin-right: 0rem !important;
            margin-left: 0rem !important;
          }

          .padding-vertical {
            padding-right: 0rem !important;
            padding-left: 0rem !important;
          }
        </style>
      </div>
      <main class="main-wrapper">
        <section class="section_hero">
          <div class="padding-global padding-section-large">
            <div class="container-medium">
              <div
                data-w-id="43787f20-42b3-0d96-4378-2d1425464f7f"
                style="opacity: 0"
                class="hero_grid"
              >
                <div
                  id="w-node-_43787f20-42b3-0d96-4378-2d1425464f80-bbe9718c"
                  class="hero_right-content"
                >
                  <img
                    src="assets/images/rariala02617-20-1-.webp"
                    loading="lazy"
                    width="4344"
                    sizes="(max-width: 479px) 100vw, (max-width: 767px) 38vw, (max-width: 991px) 42vw, (max-width: 1439px) 46vw, 40vw"
                    alt=""
                    srcset="
                      assets/images/rariala02617-20-1-p-500.webp   500w,
                      assets/images/rariala02617-20-1-p-800.webp   800w,
                      assets/images/rariala02617-20-1-p-1080.webp 1080w,
                      assets/images/rariala02617-20-1-p-1600.webp 1600w,
                      assets/images/rariala02617-20-1-p-2000.webp 2000w,
                      assets/images/rariala02617-20-1-p-2600.webp 2600w,
                      assets/images/rariala02617-20-1-p-3200.webp 3200w,
                      assets/images/rariala02617-20-1-.webp       5792w
                    "
                    class="image-109"
                  />
                </div>
                <div
                  id="w-node-_43787f20-42b3-0d96-4378-2d1425464f8e-bbe9718c"
                  class="hero_left-content"
                >
                  <div
                    id="w-node-_98538e31-5004-8459-b12a-183c1d7f2c82-bbe9718c"
                    class="w-users-usersignupformwrapper"
                  >
                    <div
                      tabindex="-1"
                      class="w-users-userformsuccessstate w-form-success"
                    >
                      <div class="w-users-userformheader">
                        <img
                          src="assets/images/thumbs-up-72.cbcaec93bc.svg"
                          loading="lazy"
                          alt=""
                        />
                        <h2>Account activated</h2>
                      </div>
                      <p>
                        Your account was created successfully. You will be
                        redirected shortly.
                      </p>
                      <div data-wf-user-form-redirect="">
                        <a href="/" class="w-inline-block"
                          >If nothing happens, click here.</a
                        >
                      </div>
                    </div>

                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                
                        <!-- Name -->
                        <div>
                            <x-input-label for="name" :value="__('Name')" />
                            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>
                
                        <!-- Email Address -->
                        <div class="mt-4">
                            <x-input-label for="email" :value="__('Email')" />
                            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>
                
                        <!-- Password -->
                        <div class="mt-4">
                            <x-input-label for="password" :value="__('Password')" />
                
                            <x-text-input id="password" class="block mt-1 w-full"
                                            type="password"
                                            name="password"
                                            required autocomplete="new-password" />
                
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>
                
                        <!-- Confirm Password -->
                        <div class="mt-4">
                            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                
                            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                            type="password"
                                            name="password_confirmation" required autocomplete="new-password" />
                
                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                        </div>
                
                        <div class="flex items-center justify-end mt-4">
                            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                                {{ __('Already registered?') }}
                            </a>
                
                            <x-primary-button class="ms-4">
                                {{ __('Register') }}
                            </x-primary-button>
                        </div>
                    </form>
                    
                      <label for="Name" class="field-label-28">Nom</label
                      ><input
                        class="text-field-17 w-input"
                        maxlength="256"
                        name=""
                        data-name=""
                        data-wf-user-field="wf-user-field-name"
                        placeholder=""
                        fieldType="data-wf-user-field-type"
                        type="text"
                        id="wf-sign-up-name"
                        required=""
                      />

                      <label for="Name" class="field-label-28">Prénom</label
                        ><input
                          class="text-field-17 w-input"
                          maxlength="256"
                          name=""
                          data-name=""
                          data-wf-user-field="wf-user-field-name"
                          placeholder=""
                          fieldType="data-wf-user-field-type"
                          type="text"
                          id="wf-sign-up-name"
                          required=""
                        />

                        
                      <label for="Name" class="field-label-28">Téléphone</label
                        ><input
                          class="text-field-17 w-input"
                          maxlength="256"
                          name=""
                          data-name=""
                          data-wf-user-field="wf-user-field-name"
                          placeholder=""
                          fieldType="data-wf-user-field-type"
                          type="text"
                          id="wf-sign-up-name"
                          required=""
                        />

                               
                      <label for="Name" class="field-label-28">Adresse</label
                        ><input
                          class="text-field-17 w-input"
                          maxlength="256"
                          name=""
                          data-name=""
                          data-wf-user-field="wf-user-field-name"
                          placeholder=""
                          fieldType="data-wf-user-field-type"
                          type="text"
                          id="wf-sign-up-name"
                          required=""
                        />

                      <label for="Email" class="field-label-29">Email</label
                      ><input
                        placeholder=""
                        id="wf-sign-up-email"
                        maxlength="256"
                        name="Email"
                        class="user-email-field w-input"
                        type="email"
                        autocomplete="username"
                        required=""
                        data-wf-user-form-input-type="email"
                      /><label for="Password-3" class="field-label-30"
                        >MOT DE PASSE</label
                      ><input
                        placeholder=""
                        id="wf-sign-up-password"
                        data-name=""
                        maxlength="256"
                        name="Password"
                        class="user-password-field _30 w-input"
                        type="password"
                        required=""
                        data-wf-user-form-input-type="password"
                      /><label class="w-checkbox"
                        ><input
                          class="w-checkbox-input"
                          name=""
                          data-name=""
                          data-wf-user-field="wf-user-field-accept-privacy"
                          placeholder=""
                          type="checkbox"
                          id="wf-sign-up-accept-privacy"
                          required=""
                        /><span class="checkbox-label-5 w-form-label"
                          >En créant un compte, j&#x27;accepte la politique de
                          confidentialité et les conditions d&#x27;utilisation
                          de ce <br />site web.</span
                        ></label
                      ><label class="w-checkbox"
                        ><input
                          class="w-checkbox-input"
                          name=""
                          data-name=""
                          data-wf-user-field="wf-user-field-accept-communications"
                          placeholder=""
                          type="checkbox"
                          id="wf-sign-up-accept-communications"
                          required=""
                        /><span class="checkbox-label-6 w-form-label"
                          >Je consens à recevoir des e-mails marketing.</span
                        ></label
                      ><input
                        data-wait="En attente ..."
                        type="submit"
                        class="w-users-userformbutton bouton-div _100 w-button"
                        value="Créer"
                      />
                      <div class="w-users-userformfooter form-footer">
                        <span class="text-span-6"
                          >Avez-vous déjà un compte?</span
                        ><a href= {{ route('login') }} class="link-block-17">Connecter</a>
                      </div>
                    <div
                      style="display: none"
                      data-wf-user-form-error="true"
                      class="w-users-userformerrorstate w-form-fail"
                    >
                      <div
                        class="user-form-error-msg"
                        wf-signup-form-general-error-error="There was an error signing you up. Please try again, or contact us if you continue to have problems."
                        wf-signup-form-not-allowed-error="You&#x27;re not allowed to access this site, please contact the admin for support."
                        wf-signup-form-invalid-email-error="Make sure your email exists and is properly formatted (e.g., user@domain.com)."
                        wf-signup-form-email-already_exist-error="An account with this email address already exists. Log in or reset your password."
                        wf-signup-form-use-invite_email-error="Use the same email address your invitation was sent to."
                        wf-signup-form-invalid-password-error="Your password must be at least 8 characters."
                        wf-signup-form-not-verified-error="We couldn&#x27;t verify your account. Please try again, or contact us if you continue to have problems."
                        wf-signup-form-expired-token-error="This link has expired. A new link has been sent to your email. Please try again, or contact us if you continue to have problems."
                        wf-signup-form-validation-failed-error="There was an error in some of the information provided."
                      >
                        There was an error signing you up. Please try again, or
                        contact us if you continue to have problems.
                      </div>
                    </div>
                    <div
                      tabindex="-1"
                      class="w-users-usersignupverificationmessage w-form-verification"
                      data-wf-user-form-verification="true"
                    >
                      <div class="w-users-userformheader">
                        <img
                          src="assets/images/email-72.67fa6be437.svg"
                          loading="lazy"
                          alt=""
                        />
                        <h2>Verification Required</h2>
                      </div>
                      <p>
                        Account verification required. Please check your email
                        to find your unique verification link.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </main>
    </div>
    @include('footer')
  </body>
</html>

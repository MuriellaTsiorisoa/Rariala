
<!DOCTYPE html>
<html
  data-wf-page="661e71d9d368b4abbbe97161"
  data-wf-site="65e18c7f1e395b37dc7bbc49"
  data-wf-status="1"
  lang="en"
>

  <head>
    <meta charset="utf-8" />
    <title>Connexion</title>

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
                data-w-id="b94c09a2-30bb-d84a-9b6c-247c97a60533"
                style="opacity: 0"
                class="hero_grid"
              >
                <div
                  id="w-node-b94c09a2-30bb-d84a-9b6c-247c97a60534-bbe97161"
                  class="hero_right-content"
                >
                  <img
                    src="assets/images/rariala02617-20-1-.webp"
                    loading="lazy"
                    width="Auto"
                    id="w-node-_5f8e030c-a8f9-2da4-e95b-73b3d8163e93-bbe97161"
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
                    sizes="(max-width: 479px) 100vw, (max-width: 767px) 38vw, (max-width: 991px) 42vw, (max-width: 1439px) 46vw, 40vw"
                    class="image-109"
                  />
                </div>
                <div
                  id="w-node-b94c09a2-30bb-d84a-9b6c-247c97a6054a-bbe97161"
                  class="hero_left-content"
                >
                  <h1
                    id="w-node-b94c09a2-30bb-d84a-9b6c-247c97a6054b-bbe97161"
                    class="hero-user petit"
                  >
                    Connectez-<strong class="bold-text-31">vous</strong> !
                  </h1>
                  <div
                    id="w-node-b94c09a2-30bb-d84a-9b6c-247c97a6054d-bbe97161"
                    class="margin-top margin-medium w-form"
                  >

                  <form method="POST" action="{{ route('login') }}">
                    @csrf
            
                    <!-- Email Address -->
                    <div>
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
            
                    <!-- Password -->
                    <div class="mt-4">
                        <x-input-label for="password" :value="__('Password')" />
            
                        <x-text-input id="password" class="block mt-1 w-full"
                                        type="password"
                                        name="password"
                                        required autocomplete="current-password" />
            
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>
            
                    <!-- Remember Me -->
                    <div class="block mt-4">
                        <label for="remember_me" class="inline-flex items-center">
                            <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                            <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                        </label>
                    </div>
            
                    <div class="flex items-center justify-end mt-4">
                        @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif
            
                        <x-primary-button class="ms-3">
                            {{ __('Log in') }}
                        </x-primary-button>
                    </div>
                </form>
            
                    <form
                      id="email-form"
                      name="email-form"
                      data-name="Email Form"
                      method="get"
                      data-ms-form="login"
                      class="form-13"
                      data-wf-page-id="661e71d9d368b4abbbe97161"
                      data-wf-element-id="b94c09a2-30bb-d84a-9b6c-247c97a6054e"
                    >
                      <label for="Email" class="text-size-small text-color-gray"
                        >EMAIL</label
                      ><input
                        class="form_text-field margin-top margin-small w-input"
                        maxlength="256"
                        name="Email"
                        data-name="Email"
                        placeholder="Vôtre email"
                        type="email"
                        id="Email"
                        data-ms-member="email"
                        required=""
                      /><label
                        for="Password"
                        class="text-size-small text-color-gray margin-top margin-medium"
                        >Mot de passe</label
                      ><input
                        class="form_text-field margin-top margin-xsmall w-input"
                        maxlength="256"
                        name="Password"
                        data-name="Password"
                        placeholder="********"
                        type="password"
                        id="Password"
                        data-ms-member="password"
                        required=""
                      />
                      <div class="form_detatils margin-vertical margin-large">
                        <a
                          data-ms-modal="forgot-password"
                          href="/reset-password"
                          class="form_link-text"
                          >Mot de passe oublié ?</a
                        >
                      </div>
                      <div class="hero_button-div margin-top margin-medium">
                        <input
                          type="submit"
                          data-wait="En attente ..."
                          class="bouton-div _100 w-button"
                          value="Connecter"
                        />
                      </div>
                    </form>
                    <div class="w-users-userformfooter form-footer">
                      <span class="text-span-6"
                        >Vous n&#x27;avez pas encore de compte?</span
                      ><a href={{ route('register') }} class="link-block-17">Créer</a>
                    </div>
                    <div class="success-message-6 w-form-done">
                      <div class="text-block-160">
                        Merci ! Votre soumission a été reçue !<br /><br /><br />
                      </div>
                    </div>
                    <div class="w-form-fail">
                      <div class="text-block-161">
                        Oops ! Quelque chose s&#x27;est mal passé lors de la
                        soumission du formulaire.
                      </div>
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

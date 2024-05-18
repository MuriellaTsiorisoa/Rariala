<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8" />
          <title>Acceuil Rariala</title>
          <meta content="Store - Webflow HTML website template" property="og:title" />
          <meta content="assets/images/store-20seo.jpg" property="og:image" />
          <meta
            content="Store - Webflow HTML website template"
            property="twitter:title"
          />
          <meta content="assets/images/store-20seo.jpg" property="twitter:image" />
          <meta content="width=device-width, initial-scale=1" name="viewport" />
          <meta content="Webflow" name="generator" />
          <link href={{asset('assets/css/webflow-style.css')}} rel="stylesheet" type="text/css" />
          <link href="https://fonts.googleapis.com" rel="preconnect" />
          <link
            href="https://fonts.gstatic.com"
            rel="preconnect"
            crossorigin="anonymous"
          />
          <script
            src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"
            type="text/javascript"
          ></script>
          <script type="text/javascript">
            WebFont.load({
              google: {
                families: [
                  "Montserrat:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic",
                  "DM Serif Text:regular",
                  "Inter:regular,500,600,700,800,900",
                  "Lora:regular,500,600,700",
                  "Abril Fatface:regular",
                  "Playfair Display:regular,500,600,700,800,900",
                  "Poppins:100,100italic,200,200italic,300,300italic,regular,italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic",
                ],
              },
            });
          </script>
          <script type="text/javascript">
            !(function (o, c) {
              var n = c.documentElement,
                t = " w-mod-";
              (n.className += t + "js"),
                ("ontouchstart" in o ||
                  (o.DocumentTouch && c instanceof DocumentTouch)) &&
                  (n.className += t + "touch");
            })(window, document);
          </script>
          <link href="assets/images/favicon.png" rel="shortcut icon" type="image/x-icon" />
          <link href="assets/images/app-icon.png" rel="apple-touch-icon" />
          <link
            rel="stylesheet"
            type="text/css"
            href="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.2.2/dist/css/splide-core.min.css"
          />
          <style>
            .splide__track {
              overflow: visible;
            }
          </style>
</head>

<body class="body">
      <div class="promo-strip-2 z-index-30">
        <div
          data-delay="4000"
          data-animation="cross"
          class="slider-2 w-slider"
          data-autoplay="true"
          data-easing="ease"
          data-hide-arrows="false"
          data-disable-swipe="false"
          data-autoplay-limit="0"
          data-nav-spacing="3"
          data-duration="500"
          data-infinite="true"
        >
          <div class="mask-2 w-slider-mask">
            <div class="slide-3 w-slide">
              <div class="texte-block-promo">Fabriqués 100% à Madagascar</div>
            </div>
            <div class="w-slide">
              <div class="texte-block-promo">
                Bienvenue sur la Boutique officielle RARIALA
              </div>
            </div>
            <div class="w-slide">
              <div class="texte-block-promo">
                Articles sur commande avec délais de livraison 15 jours
              </div>
            </div>
            <div class="w-slide">
              <div class="texte-block-promo">
                Ouvert du Lundi au Vendredi de 08h à 17h
              </div>
            </div>
          </div>
          <div class="left-arrow w-slider-arrow-left">
            <img
              src="assets/images/angle-small-right-20-2-.png"
              loading="lazy"
              alt=""
              class="image-icon-2"
            />
          </div>
          <div class="right-arrow-2 w-slider-arrow-right">
            <img
              src="assets/images/angle-small-right-20-2-.png"
              loading="lazy"
              alt=""
              class="image-icon-2 right"
            />
          </div>
        </div>
      </div>
      <div
        data-animation="over-right"
        data-collapse="medium"
        data-duration="900"
        data-easing="ease"
        data-easing2="ease"
        role="banner"
        class="navbar-hero-header-copy responsive-copy w-nav"
      >
        <div class="navigation-items-14">
          <a
            href="/"
            aria-current="page"
            class="logo-link-8 w-nav-brand w--current"
            ><div class="text-block-140">RARIALA</div></a
          >
          <div class="navigation-wrap">
            <nav role="navigation" class="navigation-items-13 w-nav-menu">
              <div data-hover="true" data-delay="0" class="dropdown w-dropdown">
                <div class="dropdown-toggle-3 w-dropdown-toggle">
                  <a href="/about" class="link-item w-inline-block"
                    ><div class="text-header">A propos</div></a
                  >
                </div>
                <nav
                  class="dropdown-list dropdown-list-2 dropdown-list-4 w-dropdown-list"
                >
                  <div class="div-dropdown">
                    <div class="div-block-128">
                      <div class="div-block-136">
                        <div class="div-block-137">
                          <img
                            width="2896"
                            loading="lazy"
                            alt=""
                            src="assets/images/rariala02422.webp"
                            class="image-74-copy"
                          />
                        </div>
                        <div class="div-block-139">
                          <h1 class="heading-66">
                            <strong class="bold-text-6"
                              >Nous avions trop <br />de choses à </strong
                            ><em class="italic-text-2">raconter</em
                            ><strong>,</strong>
                          </h1>
                          <p class="paragraph-55">
                            Rariala est spécialisée dans la fabrication
                            d&#x27;articles en fibres naturelles. Le nom
                            &quot;Rariala&quot; est un clin d&#x27;œil à
                            l&#x27;asa tanana, qui symbolise notre foi
                            inébranlable dans le talent et le savoir-faire de nos
                            artisans.
                          </p>
                          <a href="/about" class="bouton-div w-button"
                            >Découvrir la marque</a
                          >
                        </div>
                      </div>
                      <a href="#" class="link-block-13 w-inline-block"></a>
                    </div>
                  </div>
                </nav>
              </div>
              <div data-hover="true" data-delay="0" class="dropdown w-dropdown">
                <div class="dropdown-toggle-3 w-dropdown-toggle">
                  <a href="/nos-produits" class="link-item w-inline-block"
                    ><div class="text-header">Nos produits</div></a
                  >
                </div>
                <nav
                  class="dropdown-list-2 dropdown-list-4 dropdown-list-copy-copy w-dropdown-list"
                >
                  <div class="div-dropdown-copy">
                    <div
                      class="collection-list-wrapper-6 product prod w-dyn-list"
                    >
                      <div
                        id="w-node-_3a31403a-7347-d9d3-730b-653d4349cde5-dc7bbc2d"
                        role="list"
                        class="showcase-products single-column prod w-dyn-items"
                      >
                        <div
                          role="listitem"
                          class="collection-item-14 w-dyn-item"
                        >
                          <a
                            href="/product/soavina-4"
                            class="product-card w-inline-block"
                            ><div class="card-image-wrapper">
                              <div class="card-image extra-large">
                                <div class="background-product">
                                  <div
                                    data-wf-sku-bindings="%5B%7B%22from%22%3A%22f_main_image_4dr.url%22%2C%22to%22%3A%22style.background-image%22%7D%5D"
                                    style="
                                      background-image: url('assets/images/soavina-20150-20000-1-.webp');
                                    "
                                    class="image-card-2 one"
                                  ></div>
                                  <div class="image-card-2 two"></div>
                                  <div class="image-card-2 three"></div>
                                </div>
                                <div class="image-indicator">
                                  <div class="indicator-fill"></div>
                                </div>
                              </div>
                            </div>
                            <div class="card-info">
                              <div
                                id="w-node-_3a31403a-7347-d9d3-730b-653d4349cdf1-dc7bbc2d"
                                class="product-card-top"
                              >
                                <div class="product-card-info">
                                  <div class="stacked-product-title">
                                    <h3 class="product-title">Soavina</h3>
                                  </div>
                                </div>
                                <div class="dynamic-price">
                                  <div
                                    data-wf-sku-bindings="%5B%7B%22from%22%3A%22f_price_%22%2C%22to%22%3A%22innerHTML%22%7D%5D"
                                    class="price-text"
                                  >
                                     150 000 Ar
                                  </div>
                                  <div class="discount-text">
                                    This is some text inside of a div block.
                                  </div>
                                </div>
                                <img
                                  src="assets/images/tag-filled-red-24x24-402x.svg"
                                  loading="lazy"
                                  alt=""
                                  class="tag-icon"
                                />
                                <div
                                  id="w-node-_3a31403a-7347-d9d3-730b-653d4349cdfa-dc7bbc2d"
                                  data-wf-sku-conditions="%7B%22condition%22%3A%7B%22fields%22%3A%7B%22default-sku%3AecSkuInventoryQuantity%22%3A%7B%22eq%22%3A0%2C%22type%22%3A%22Number%22%7D%7D%7D%2C%22timezone%22%3A%22Indian%2FAntananarivo%22%7D"
                                  class="label-text hiiden w-condition-invisible"
                                >
                                  épuisé
                                </div>
                              </div>
                            </div></a
                          >
                        </div>
                        <div
                          role="listitem"
                          class="collection-item-14 w-dyn-item"
                        >
                          <a
                            href="/product/soavina-3"
                            class="product-card w-inline-block"
                            ><div class="card-image-wrapper">
                              <div class="card-image extra-large">
                                <div class="background-product">
                                  <div
                                    data-wf-sku-bindings="%5B%7B%22from%22%3A%22f_main_image_4dr.url%22%2C%22to%22%3A%22style.background-image%22%7D%5D"
                                    style="
                                      background-image: url('assets/images/soavina-20130-20000.webp');
                                    "
                                    class="image-card-2 one"
                                  ></div>
                                  <div class="image-card-2 two"></div>
                                  <div class="image-card-2 three"></div>
                                </div>
                                <div class="image-indicator">
                                  <div class="indicator-fill"></div>
                                </div>
                              </div>
                            </div>
                            <div class="card-info">
                              <div
                                id="w-node-_3a31403a-7347-d9d3-730b-653d4349cdf1-dc7bbc2d"
                                class="product-card-top"
                              >
                                <div class="product-card-info">
                                  <div class="stacked-product-title">
                                    <h3 class="product-title">Soavina</h3>
                                  </div>
                                </div>
                                <div class="dynamic-price">
                                  <div
                                    data-wf-sku-bindings="%5B%7B%22from%22%3A%22f_price_%22%2C%22to%22%3A%22innerHTML%22%7D%5D"
                                    class="price-text"
                                  >
                                     130 000 Ar
                                  </div>
                                  <div class="discount-text">
                                    This is some text inside of a div block.
                                  </div>
                                </div>
                                <img
                                  src="assets/images/tag-filled-red-24x24-402x.svg"
                                  loading="lazy"
                                  alt=""
                                  class="tag-icon"
                                />
                                <div
                                  id="w-node-_3a31403a-7347-d9d3-730b-653d4349cdfa-dc7bbc2d"
                                  data-wf-sku-conditions="%7B%22condition%22%3A%7B%22fields%22%3A%7B%22default-sku%3AecSkuInventoryQuantity%22%3A%7B%22eq%22%3A0%2C%22type%22%3A%22Number%22%7D%7D%7D%2C%22timezone%22%3A%22Indian%2FAntananarivo%22%7D"
                                  class="label-text hiiden w-condition-invisible"
                                >
                                  épuisé
                                </div>
                              </div>
                            </div></a
                          >
                        </div>
                        <div
                          role="listitem"
                          class="collection-item-14 w-dyn-item"
                        >
                          <a
                            href="/product/harinala-3"
                            class="product-card w-inline-block"
                            ><div class="card-image-wrapper">
                              <div class="card-image extra-large">
                                <div class="background-product">
                                  <div
                                    data-wf-sku-bindings="%5B%7B%22from%22%3A%22f_main_image_4dr.url%22%2C%22to%22%3A%22style.background-image%22%7D%5D"
                                    style="
                                      background-image: url('assets/images/rariala02726.webp');
                                    "
                                    class="image-card-2 one"
                                  ></div>
                                  <div class="image-card-2 two"></div>
                                  <div class="image-card-2 three"></div>
                                </div>
                                <div class="image-indicator">
                                  <div class="indicator-fill"></div>
                                </div>
                              </div>
                            </div>
                            <div class="card-info">
                              <div
                                id="w-node-_3a31403a-7347-d9d3-730b-653d4349cdf1-dc7bbc2d"
                                class="product-card-top"
                              >
                                <div class="product-card-info">
                                  <div class="stacked-product-title">
                                    <h3 class="product-title">Harinala</h3>
                                  </div>
                                </div>
                                <div class="dynamic-price">
                                  <div
                                    data-wf-sku-bindings="%5B%7B%22from%22%3A%22f_price_%22%2C%22to%22%3A%22innerHTML%22%7D%5D"
                                    class="price-text"
                                  >
                                     90 000 Ar
                                  </div>
                                  <div class="discount-text">
                                    This is some text inside of a div block.
                                  </div>
                                </div>
                                <img
                                  src="assets/images/tag-filled-red-24x24-402x.svg"
                                  loading="lazy"
                                  alt=""
                                  class="tag-icon"
                                />
                                <div
                                  id="w-node-_3a31403a-7347-d9d3-730b-653d4349cdfa-dc7bbc2d"
                                  data-wf-sku-conditions="%7B%22condition%22%3A%7B%22fields%22%3A%7B%22default-sku%3AecSkuInventoryQuantity%22%3A%7B%22eq%22%3A0%2C%22type%22%3A%22Number%22%7D%7D%7D%2C%22timezone%22%3A%22Indian%2FAntananarivo%22%7D"
                                  class="label-text hiiden w-condition-invisible"
                                >
                                  épuisé
                                </div>
                              </div>
                            </div></a
                          >
                        </div>
                        <div
                          role="listitem"
                          class="collection-item-14 w-dyn-item"
                        >
                          <a
                            href="/product/harindra"
                            class="product-card w-inline-block"
                            ><div class="card-image-wrapper">
                              <div class="card-image extra-large">
                                <div class="background-product">
                                  <div
                                    data-wf-sku-bindings="%5B%7B%22from%22%3A%22f_main_image_4dr.url%22%2C%22to%22%3A%22style.background-image%22%7D%5D"
                                    style="
                                      background-image: url('assets/images/harindra.webp');
                                    "
                                    class="image-card-2 one"
                                  ></div>
                                  <div class="image-card-2 two"></div>
                                  <div class="image-card-2 three"></div>
                                </div>
                                <div class="image-indicator">
                                  <div class="indicator-fill"></div>
                                </div>
                              </div>
                            </div>
                            <div class="card-info">
                              <div
                                id="w-node-_3a31403a-7347-d9d3-730b-653d4349cdf1-dc7bbc2d"
                                class="product-card-top"
                              >
                                <div class="product-card-info">
                                  <div class="stacked-product-title">
                                    <h3 class="product-title">Harindra</h3>
                                  </div>
                                </div>
                                <div class="dynamic-price">
                                  <div
                                    data-wf-sku-bindings="%5B%7B%22from%22%3A%22f_price_%22%2C%22to%22%3A%22innerHTML%22%7D%5D"
                                    class="price-text"
                                  >
                                     130 000 Ar
                                  </div>
                                  <div class="discount-text">
                                    This is some text inside of a div block.
                                  </div>
                                </div>
                                <img
                                  src="assets/images/tag-filled-red-24x24-402x.svg"
                                  loading="lazy"
                                  alt=""
                                  class="tag-icon"
                                />
                                <div
                                  id="w-node-_3a31403a-7347-d9d3-730b-653d4349cdfa-dc7bbc2d"
                                  data-wf-sku-conditions="%7B%22condition%22%3A%7B%22fields%22%3A%7B%22default-sku%3AecSkuInventoryQuantity%22%3A%7B%22eq%22%3A0%2C%22type%22%3A%22Number%22%7D%7D%7D%2C%22timezone%22%3A%22Indian%2FAntananarivo%22%7D"
                                  class="label-text hiiden w-condition-invisible"
                                >
                                  épuisé
                                </div>
                              </div>
                            </div></a
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="div-block-141">
                    <div>
                      <a href="/nos-produits" class="new-button-blanc w-button"
                        >Découvrir la collection</a
                      >
                    </div>
                    <div class="div-block-140">
                      <a href="/creer" class="button-noir border w-button"
                        >Je personnalise</a
                      ><img
                        src="assets/images/pen-fancy-20-1-.png"
                        loading="lazy"
                        width="18"
                        height="18"
                        alt=""
                        class="image-76"
                      />
                    </div>
                  </div>
                </nav>
              </div>
              <div data-hover="true" data-delay="0" class="dropdown w-dropdown">
                <div class="dropdown-toggle-3 w-dropdown-toggle">
                  <a href="/contact" class="link-item w-inline-block"
                    ><div class="text-header">Contact</div></a
                  >
                </div>
                <nav
                  class="dropdown-list-2 dropdown-list-4 dropdown-list-copy w-dropdown-list"
                >
                  <div class="div-dropdown">
                    <div class="div-block-128">
                      <div class="div-block-136-copy">
                        <div class="div-block-137">
                          <img
                            src="assets/images/rariala02564.webp"
                            loading="lazy"
                            width="2896"
                            alt=""
                            class="image-74-copy"
                          />
                        </div>
                        <div class="div-block-139">
                          <h1 class="heading-66">
                            N&#x27;hésitez pas à<br />nous
                            <strong class="bold-text-5">contacter,</strong>
                          </h1>
                          <div class="email-et-telephone-copy">
                            <strong class="bold-text-3">Adresse email:</strong>
                            <a
                              href="mailto:rarialamdg@gmail.com?subject=Rariala"
                              class="link-19"
                              >rarialamdg@gmail.com</a
                            >
                          </div>
                          <div class="email-et-telephone">
                            <strong class="bold-text-4"
                              >Numéro de téléphone:</strong
                            >
                            +261 32 62 419 69
                          </div>
                          <a href="/contact" class="bouton-div w-button"
                            >Contactez-nous</a
                          >
                        </div>
                      </div>
                      <a href="#" class="link-block-13 w-inline-block"></a>
                    </div>
                  </div>
                </nav>
              </div>
              <a href={{ route('login') }} class="link-block-14 w-inline-block"
                ><div class="text-header">Mon compte</div></a
              >
              <div
                data-hover="false"
                data-delay="0"
                class="dropdown-2 w-dropdown"
              >
                <div class="dropdown-toggle-3-copy w-dropdown-toggle"></div>
                <nav class="w-dropdown-list">
                  <a href="#" class="w-dropdown-link">Link 1</a
                  ><a href="#" class="w-dropdown-link">Link 2</a
                  ><a href="#" class="w-dropdown-link">Link 3</a>
                </nav>
              </div>
            </nav>
            <div
              data-open-product=""
              data-wf-cart-type="rightDropdown"
              data-wf-cart-query="query Dynamo2 {
    database {
      id
      commerceOrder {
        comment
        extraItems {
          name
          pluginId
          pluginName
          price {
            value
            unit
            decimalValue
            string
          }
        }
        id
        startedOn
        statusFlags {
          hasDownloads
          hasSubscription
          isFreeOrder
          requiresShipping
        }
        subtotal {
          value
          unit
          decimalValue
          string
        }
        total {
          value
          unit
          decimalValue
          string
        }
        updatedOn
        userItems {
          count
          id
          price {
            value
            unit
            decimalValue
            string
          }
          product {
            id
            cmsLocaleId
            f__draft_0ht
            f__archived_0ht
            f_name_
            f_sku_properties_3dr {
              id
              name
              enum {
                id
                name
                slug
              }
            }
          }
          rowTotal {
            value
            unit
            decimalValue
            string
          }
          sku {
            cmsLocaleId
            f__draft_0ht
            f__archived_0ht
            f_main_image_4dr {
              url
              file {
                size
                origFileName
                createdOn
                updatedOn
                mimeType
                width
                height
                variants {
                  origFileName
                  quality
                  height
                  width
                  s3Url
                  error
                  size
                }
              }
              alt
            }
            f_sku_values_3dr {
              property {
                id
              }
              value {
                id
              }
            }
            id
          }
          subscriptionFrequency
          subscriptionInterval
          subscriptionTrial
        }
        userItemsCount
      }
    }
    site {
      id
      commerce {
        businessAddress {
          country
        }
        defaultCountry
        defaultCurrency
        quickCheckoutEnabled
      }
    }
  }"
              data-wf-page-link-href-prefix=""
              data-open-on-hover=""
              class="w-commerce-commercecartwrapper cart-7"
              data-node-type="commerce-cart-wrapper"
            >
              <a
                class="w-commerce-commercecartopenlink cart-button-9 w-inline-block"
                role="button"
                aria-haspopup="dialog"
                aria-label="Open cart"
                data-node-type="commerce-cart-open-link"
                href="#"
                ><div class="text-block-93">Panier</div>
                <img
                  src="assets/images/shopping-cart-20-2-.png"
                  loading="lazy"
                  width="256"
                  height="Auto"
                  alt=""
                  data-w-id="1bbcafea-c6a9-c065-e62a-ee6966c5b0a4"
                  class="image-card image-104"
              /></a>
              <div
                style="display: none"
                class="w-commerce-commercecartcontainerwrapper w-commerce-commercecartcontainerwrapper--cartType-rightDropdown"
                data-node-type="commerce-cart-container-wrapper"
              >
                <div
                  data-node-type="commerce-cart-container"
                  role="dialog"
                  class="w-commerce-commercecartcontainer cart-container-3"
                >
                  <div class="w-commerce-commercecartheader cart-header-7">
                    <h4 class="w-commerce-commercecartheading sous-titre">
                      Votre panier
                    </h4>
                    <a
                      class="w-commerce-commercecartcloselink w-inline-block"
                      role="button"
                      aria-label="Close cart"
                      data-node-type="commerce-cart-close-link"
                      ><img
                        src="assets/images/circle-xmark-20-1-.png"
                        loading="lazy"
                        alt=""
                    /></a>
                  </div>
                  <div
                    class="w-commerce-commercecartformwrapper cart-form-wrapper-2"
                  >
                    <form
                      style="display: none"
                      class="w-commerce-commercecartform default-state-4"
                      data-node-type="commerce-cart-form"
                    >
                      <script
                        type="text/x-wf-template"
                        id="wf-template-1bbcafea-c6a9-c065-e62a-ee6966c5b0b0"
                      >
                        %3Cdiv%20class%3D%22w-commerce-commercecartitem%20cart-item-2%22%3E%3Cimg%20src%3D%22https%3A%2F%2Fassets-global.website-files.com%2Fplugins%2FBasic%2Fassets%2Fplaceholder.60f9b1840c.svg%22%20data-wf-bindings%3D%22%255B%257B%2522src%2522%253A%257B%2522type%2522%253A%2522ImageRef%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522identity%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.sku.f_main_image_4dr%2522%257D%257D%255D%22%20alt%3D%22%22%20class%3D%22w-commerce-commercecartitemimage%20image-47%20w-dyn-bind-empty%22%2F%3E%3Cdiv%20class%3D%22w-commerce-commercecartiteminfo%20div-block-82%22%3E%3Cdiv%20data-wf-bindings%3D%22%255B%257B%2522innerHTML%2522%253A%257B%2522type%2522%253A%2522PlainText%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522identity%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.product.f_name_%2522%257D%257D%255D%22%20class%3D%22w-commerce-commercecartproductname%20texte-card%20w-dyn-bind-empty%22%3E%3C%2Fdiv%3E%3Cdiv%20data-wf-bindings%3D%22%255B%257B%2522innerHTML%2522%253A%257B%2522type%2522%253A%2522CommercePrice%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522price%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.price%2522%257D%257D%255D%22%20class%3D%22text-block-95%22%3E%240.00%3C%2Fdiv%3E%3Cscript%20type%3D%22text%2Fx-wf-template%22%20id%3D%22wf-template-1bbcafea-c6a9-c065-e62a-ee6966c5b0b6%22%3E%253Cli%2520class%253D%2522option-3%2522%253E%253Cspan%2520class%253D%2522text-block-146%2522%2520data-wf-bindings%253D%2522%25255B%25257B%252522innerHTML%252522%25253A%25257B%252522type%252522%25253A%252522PlainText%252522%25252C%252522filter%252522%25253A%25257B%252522type%252522%25253A%252522identity%252522%25252C%252522params%252522%25253A%25255B%25255D%25257D%25252C%252522dataPath%252522%25253A%252522database.commerceOrder.userItems%25255B%25255D.product.f_sku_properties_3dr%25255B%25255D.name%252522%25257D%25257D%25255D%2522%253E%253C%252Fspan%253E%253Cspan%253E%253A%2520%253C%252Fspan%253E%253Cspan%2520class%253D%2522text-block-145%2522%2520data-wf-bindings%253D%2522%25255B%25257B%252522innerHTML%252522%25253A%25257B%252522type%252522%25253A%252522CommercePropValues%252522%25252C%252522filter%252522%25253A%25257B%252522type%252522%25253A%252522identity%252522%25252C%252522params%252522%25253A%25255B%25255D%25257D%25252C%252522dataPath%252522%25253A%252522database.commerceOrder.userItems%25255B%25255D.product.f_sku_properties_3dr%25255B%25255D%252522%25257D%25257D%25255D%2522%253E%253C%252Fspan%253E%253C%252Fli%253E%3C%2Fscript%3E%3Cul%20data-wf-bindings%3D%22%255B%257B%2522optionSets%2522%253A%257B%2522type%2522%253A%2522CommercePropTable%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522identity%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.product.f_sku_properties_3dr%5B%5D%2522%257D%257D%252C%257B%2522optionValues%2522%253A%257B%2522type%2522%253A%2522CommercePropValues%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522identity%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.sku.f_sku_values_3dr%2522%257D%257D%255D%22%20class%3D%22w-commerce-commercecartoptionlist%22%20data-wf-collection%3D%22database.commerceOrder.userItems%255B%255D.product.f_sku_properties_3dr%22%20data-wf-template-id%3D%22wf-template-1bbcafea-c6a9-c065-e62a-ee6966c5b0b6%22%3E%3Cli%20class%3D%22option-3%22%3E%3Cspan%20class%3D%22text-block-146%22%20data-wf-bindings%3D%22%255B%257B%2522innerHTML%2522%253A%257B%2522type%2522%253A%2522PlainText%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522identity%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.product.f_sku_properties_3dr%255B%255D.name%2522%257D%257D%255D%22%3E%3C%2Fspan%3E%3Cspan%3E%3A%20%3C%2Fspan%3E%3Cspan%20class%3D%22text-block-145%22%20data-wf-bindings%3D%22%255B%257B%2522innerHTML%2522%253A%257B%2522type%2522%253A%2522CommercePropValues%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522identity%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.product.f_sku_properties_3dr%255B%255D%2522%257D%257D%255D%22%3E%3C%2Fspan%3E%3C%2Fli%3E%3C%2Ful%3E%3Ca%20href%3D%22%23%22%20role%3D%22button%22%20data-wf-bindings%3D%22%255B%257B%2522data-commerce-sku-id%2522%253A%257B%2522type%2522%253A%2522ItemRef%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522identity%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.sku.id%2522%257D%257D%255D%22%20class%3D%22remove-button-3%20w-inline-block%22%20data-wf-cart-action%3D%22remove-item%22%20data-commerce-sku-id%3D%22%22%20aria-label%3D%22Remove%20item%20from%20cart%22%3E%3Cimg%20src%3D%22https%3A%2F%2Fassets-global.website-files.com%2F65e18c7f1e395b37dc7bbc49%2F663c67cb8269a1d73ff969c9_cross-small.png%22%20loading%3D%22lazy%22%20width%3D%2216%22%20alt%3D%22%22%2F%3E%3C%2Fa%3E%3C%2Fdiv%3E%3Cinput%20aria-label%3D%22Update%20quantity%22%20data-wf-bindings%3D%22%255B%257B%2522value%2522%253A%257B%2522type%2522%253A%2522Number%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522numberPrecision%2522%252C%2522params%2522%253A%255B%25220%2522%252C%2522numberPrecision%2522%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.count%2522%257D%257D%252C%257B%2522data-commerce-sku-id%2522%253A%257B%2522type%2522%253A%2522ItemRef%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522identity%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.sku.id%2522%257D%257D%255D%22%20class%3D%22w-commerce-commercecartquantity%20cart-quantity-20%22%20required%3D%22%22%20pattern%3D%22%5E%5B0-9%5D%2B%24%22%20inputMode%3D%22numeric%22%20type%3D%22number%22%20name%3D%22quantity%22%20autoComplete%3D%22off%22%20data-wf-cart-action%3D%22update-item-quantity%22%20data-commerce-sku-id%3D%22%22%20value%3D%221%22%2F%3E%3C%2Fdiv%3E
                      </script>
                      <div
                        class="w-commerce-commercecartlist cart-list-3"
                        data-wf-collection="database.commerceOrder.userItems"
                        data-wf-template-id="wf-template-1bbcafea-c6a9-c065-e62a-ee6966c5b0b0"
                      >
                        <div class="w-commerce-commercecartitem cart-item-2">
                          <img
                            src="https://assets-global.website-files.com/plugins/Basic/assets/placeholder.60f9b1840c.svg"
                            data-wf-bindings="%5B%7B%22src%22%3A%7B%22type%22%3A%22ImageRef%22%2C%22filter%22%3A%7B%22type%22%3A%22identity%22%2C%22params%22%3A%5B%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.userItems%5B%5D.sku.f_main_image_4dr%22%7D%7D%5D"
                            alt=""
                            class="w-commerce-commercecartitemimage image-47 w-dyn-bind-empty"
                          />
                          <div
                            class="w-commerce-commercecartiteminfo div-block-82"
                          >
                            <div
                              data-wf-bindings="%5B%7B%22innerHTML%22%3A%7B%22type%22%3A%22PlainText%22%2C%22filter%22%3A%7B%22type%22%3A%22identity%22%2C%22params%22%3A%5B%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.userItems%5B%5D.product.f_name_%22%7D%7D%5D"
                              class="w-commerce-commercecartproductname texte-card w-dyn-bind-empty"
                            ></div>
                            <div
                              data-wf-bindings="%5B%7B%22innerHTML%22%3A%7B%22type%22%3A%22CommercePrice%22%2C%22filter%22%3A%7B%22type%22%3A%22price%22%2C%22params%22%3A%5B%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.userItems%5B%5D.price%22%7D%7D%5D"
                              class="text-block-95"
                            >
                              $0.00
                            </div>
                            <script
                              type="text/x-wf-template"
                              id="wf-template-1bbcafea-c6a9-c065-e62a-ee6966c5b0b6"
                            >
                              %3Cli%20class%3D%22option-3%22%3E%3Cspan%20class%3D%22text-block-146%22%20data-wf-bindings%3D%22%255B%257B%2522innerHTML%2522%253A%257B%2522type%2522%253A%2522PlainText%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522identity%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.product.f_sku_properties_3dr%255B%255D.name%2522%257D%257D%255D%22%3E%3C%2Fspan%3E%3Cspan%3E%3A%20%3C%2Fspan%3E%3Cspan%20class%3D%22text-block-145%22%20data-wf-bindings%3D%22%255B%257B%2522innerHTML%2522%253A%257B%2522type%2522%253A%2522CommercePropValues%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522identity%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.product.f_sku_properties_3dr%255B%255D%2522%257D%257D%255D%22%3E%3C%2Fspan%3E%3C%2Fli%3E
                            </script>
                            <ul
                              data-wf-bindings="%5B%7B%22optionSets%22%3A%7B%22type%22%3A%22CommercePropTable%22%2C%22filter%22%3A%7B%22type%22%3A%22identity%22%2C%22params%22%3A%5B%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.userItems%5B%5D.product.f_sku_properties_3dr[]%22%7D%7D%2C%7B%22optionValues%22%3A%7B%22type%22%3A%22CommercePropValues%22%2C%22filter%22%3A%7B%22type%22%3A%22identity%22%2C%22params%22%3A%5B%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.userItems%5B%5D.sku.f_sku_values_3dr%22%7D%7D%5D"
                              class="w-commerce-commercecartoptionlist"
                              data-wf-collection="database.commerceOrder.userItems%5B%5D.product.f_sku_properties_3dr"
                              data-wf-template-id="wf-template-1bbcafea-c6a9-c065-e62a-ee6966c5b0b6"
                            >
                              <li class="option-3">
                                <span
                                  class="text-block-146"
                                  data-wf-bindings="%5B%7B%22innerHTML%22%3A%7B%22type%22%3A%22PlainText%22%2C%22filter%22%3A%7B%22type%22%3A%22identity%22%2C%22params%22%3A%5B%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.userItems%5B%5D.product.f_sku_properties_3dr%5B%5D.name%22%7D%7D%5D"
                                ></span
                                ><span>: </span
                                ><span
                                  class="text-block-145"
                                  data-wf-bindings="%5B%7B%22innerHTML%22%3A%7B%22type%22%3A%22CommercePropValues%22%2C%22filter%22%3A%7B%22type%22%3A%22identity%22%2C%22params%22%3A%5B%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.userItems%5B%5D.product.f_sku_properties_3dr%5B%5D%22%7D%7D%5D"
                                ></span>
                              </li>
                            </ul>
                            <a
                              href="#"
                              role="button"
                              data-wf-bindings="%5B%7B%22data-commerce-sku-id%22%3A%7B%22type%22%3A%22ItemRef%22%2C%22filter%22%3A%7B%22type%22%3A%22identity%22%2C%22params%22%3A%5B%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.userItems%5B%5D.sku.id%22%7D%7D%5D"
                              class="remove-button-3 w-inline-block"
                              data-wf-cart-action="remove-item"
                              data-commerce-sku-id=""
                              aria-label="Remove item from cart"
                              ><img
                                src="assets/images/cross-small.png"
                                loading="lazy"
                                width="16"
                                alt=""
                            /></a>
                          </div>
                          <input
                            aria-label="Update quantity"
                            data-wf-bindings="%5B%7B%22value%22%3A%7B%22type%22%3A%22Number%22%2C%22filter%22%3A%7B%22type%22%3A%22numberPrecision%22%2C%22params%22%3A%5B%220%22%2C%22numberPrecision%22%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.userItems%5B%5D.count%22%7D%7D%2C%7B%22data-commerce-sku-id%22%3A%7B%22type%22%3A%22ItemRef%22%2C%22filter%22%3A%7B%22type%22%3A%22identity%22%2C%22params%22%3A%5B%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.userItems%5B%5D.sku.id%22%7D%7D%5D"
                            class="w-commerce-commercecartquantity cart-quantity-20"
                            required=""
                            pattern="^[0-9]+$"
                            inputmode="numeric"
                            type="number"
                            name="quantity"
                            autocomplete="off"
                            data-wf-cart-action="update-item-quantity"
                            data-commerce-sku-id=""
                            value="1"
                          />
                        </div>
                      </div>
                      <div class="w-commerce-commercecartfooter cart-footer-5">
                        <div
                          aria-live="polite"
                          aria-atomic="true"
                          class="w-commerce-commercecartlineitem cart-line-item-9"
                        >
                          <div class="text-block-96">Total</div>
                          <div
                            data-wf-bindings="%5B%7B%22innerHTML%22%3A%7B%22type%22%3A%22CommercePrice%22%2C%22filter%22%3A%7B%22type%22%3A%22price%22%2C%22params%22%3A%5B%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.subtotal%22%7D%7D%5D"
                            class="w-commerce-commercecartordervalue text-block-97"
                          ></div>
                        </div>
                        <div>
                          <div
                            data-node-type="commerce-cart-quick-checkout-actions"
                            style="display: none"
                          >
                            <a
                              role="button"
                              tabindex="0"
                              aria-haspopup="dialog"
                              data-node-type="commerce-cart-quick-checkout-button"
                              style="display: none"
                              class="w-commerce-commercecartquickcheckoutbutton"
                              ><svg
                                class="w-commerce-commercequickcheckoutgoogleicon"
                                xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="16"
                                height="16"
                                viewBox="0 0 16 16"
                              >
                                <defs>
                                  <polygon
                                    id="google-mark-a"
                                    points="0 .329 3.494 .329 3.494 7.649 0 7.649"
                                  ></polygon>
                                  <polygon
                                    id="google-mark-c"
                                    points=".894 0 13.169 0 13.169 6.443 .894 6.443"
                                  ></polygon>
                                </defs>
                                <g fill="none" fill-rule="evenodd">
                                  <path
                                    fill="#4285F4"
                                    d="M10.5967,12.0469 L10.5967,14.0649 L13.1167,14.0649 C14.6047,12.6759 15.4577,10.6209 15.4577,8.1779 C15.4577,7.6339 15.4137,7.0889 15.3257,6.5559 L7.8887,6.5559 L7.8887,9.6329 L12.1507,9.6329 C11.9767,10.6119 11.4147,11.4899 10.5967,12.0469"
                                  ></path>
                                  <path
                                    fill="#34A853"
                                    d="M7.8887,16 C10.0137,16 11.8107,15.289 13.1147,14.067 C13.1147,14.066 13.1157,14.065 13.1167,14.064 L10.5967,12.047 C10.5877,12.053 10.5807,12.061 10.5727,12.067 C9.8607,12.556 8.9507,12.833 7.8887,12.833 C5.8577,12.833 4.1387,11.457 3.4937,9.605 L0.8747,9.605 L0.8747,11.648 C2.2197,14.319 4.9287,16 7.8887,16"
                                  ></path>
                                  <g transform="translate(0 4)">
                                    <mask id="google-mark-b" fill="#fff">
                                      <use xlink:href="#google-mark-a"></use>
                                    </mask>
                                    <path
                                      fill="#FBBC04"
                                      d="M3.4639,5.5337 C3.1369,4.5477 3.1359,3.4727 3.4609,2.4757 L3.4639,2.4777 C3.4679,2.4657 3.4749,2.4547 3.4789,2.4427 L3.4939,0.3287 L0.8939,0.3287 C0.8799,0.3577 0.8599,0.3827 0.8459,0.4117 C-0.2821,2.6667 -0.2821,5.3337 0.8459,7.5887 L0.8459,7.5997 C0.8549,7.6167 0.8659,7.6317 0.8749,7.6487 L3.4939,5.6057 C3.4849,5.5807 3.4729,5.5587 3.4639,5.5337"
                                      mask="url(#google-mark-b)"
                                    ></path>
                                  </g>
                                  <mask id="google-mark-d" fill="#fff">
                                    <use xlink:href="#google-mark-c"></use>
                                  </mask>
                                  <path
                                    fill="#EA4335"
                                    d="M0.894,4.3291 L3.478,6.4431 C4.113,4.5611 5.843,3.1671 7.889,3.1671 C9.018,3.1451 10.102,3.5781 10.912,4.3671 L13.169,2.0781 C11.733,0.7231 9.85,-0.0219 7.889,0.0001 C4.941,0.0001 2.245,1.6791 0.894,4.3291"
                                    mask="url(#google-mark-d)"
                                  ></path>
                                </g></svg
                              ><svg
                                class="w-commerce-commercequickcheckoutmicrosofticon"
                                xmlns="http://www.w3.org/2000/svg"
                                width="16"
                                height="16"
                                viewBox="0 0 16 16"
                              >
                                <g fill="none" fill-rule="evenodd">
                                  <polygon
                                    fill="#F05022"
                                    points="7 7 1 7 1 1 7 1"
                                  ></polygon>
                                  <polygon
                                    fill="#7DB902"
                                    points="15 7 9 7 9 1 15 1"
                                  ></polygon>
                                  <polygon
                                    fill="#00A4EE"
                                    points="7 15 1 15 1 9 7 9"
                                  ></polygon>
                                  <polygon
                                    fill="#FFB700"
                                    points="15 15 9 15 9 9 15 9"
                                  ></polygon>
                                </g>
                              </svg>
                              <div>Pay with browser.</div></a
                            >
                          </div>
                          <a href="#" class="bouton-div _100 w-button"
                            >Valider la commande</a
                          >
                        </div>
                      </div>
                    </form>
                    <div class="w-commerce-commercecartemptystate">
                      <div class="div-block-144">
                        <img
                          src="assets/images/empty-cart.png"
                          loading="lazy"
                          width="264"
                          sizes="100vw"
                          alt=""
                          srcset="
                            assets/images/empty-cart-p-500.png 500w,
                            assets/images/empty-cart.png       512w
                          "
                          class="image-99"
                        />
                        <div
                          aria-label="This cart is empty"
                          aria-live="polite"
                          class="text-block-147"
                        >
                          Votre panier est vide.
                        </div>
                        <a href="/nos-produits" class="bouton-div _100 w-button"
                          >Découvrir la collection</a
                        >
                      </div>
                    </div>
                    <div
                      aria-live="assertive"
                      style="display: none"
                      data-node-type="commerce-cart-error"
                      class="w-commerce-commercecarterrorstate error-state"
                    >
                      <div
                        class="error-message-3 w-cart-error-msg"
                        data-w-cart-quantity-error="Le produit n&#x27;est pas disponible dans cette quantité."
                        data-w-cart-general-error="Une erreur s&#x27;est produite lors de l&#x27;ajout de cet article au panier."
                        data-w-cart-checkout-error="Le paiement est désactivé sur ce site."
                        data-w-cart-cart_order_min-error="Le minimum de commande n&#x27;a pas été atteint. Ajoutez plus d&#x27;articles à votre panier pour continuer."
                        data-w-cart-subscription_error-error="Avant d&#x27;acheter, veuillez utiliser votre invitation par e-mail pour vérifier votre adresse afin que nous puissions envoyer des mises à jour de commande."
                      >
                        Le produit n&#x27;est pas disponible dans cette quantité.
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="menu-button produit w-nav-button">
              <img
                src="assets/images/menu-burger-20-2-.png"
                loading="lazy"
                width="20"
                height="20"
                alt=""
                id="w-node-_1bbcafea-c6a9-c065-e62a-ee6966c5b0da-dc7bbc2d"
                class="menu-icon-2"
              />
            </div>
          </div>
        </div>
      </div>

                      <div
                      data-w-id="42e5e855-c0b5-c32e-928a-ea7f24b09c7f"
                      class="section-hero-2"
                    >
                      <img
                        src="assets/images/cropped.webp"
                        loading="lazy"
                        width="Auto"
                        style="opacity: 0"
                        alt=""
                        data-w-id="d730add0-23fc-0b01-d13c-2fe873c9c581"
                        class="image-81"
                      />
                      <div class="div-icon-2">
                        <div class="menu-button-5">
                          <a
                            href="https://www.instagram.com/rariala_madagascar/"
                            class="menu-link home w-inline-block"
                            ><img
                              src="assets/images/instagram.png"
                              sizes="(max-width: 1439px) 100vw, 22px"
                              srcset="
                                assets/images/instagram-p-500.png 500w,
                                assets/images/instagram.png       512w
                              "
                              alt=""
                              class="image-icon-3" /></a
                          ><a
                            href="https://web.facebook.com/Rariala?mibextid=LQQJ4d&amp;_rdc=1&amp;_rdr"
                            class="menu-link about w-inline-block"
                            ><img
                              src="assets/images/facebook-app-symbol.png"
                              alt=""
                              class="image-icon-3" /></a
                          ><a
                            href="https://www.linkedin.com/company/rariala/"
                            class="menu-link blog w-inline-block"
                            ><img
                              src="assets/images/linkedin.png"
                              sizes="(max-width: 1439px) 100vw, 22px"
                              srcset="assets/images/linkedin-p-500.png 500w, assets/images/linkedin.png 512w"
                              alt=""
                              class="image-icon-3" /></a
                          ><a
                            href="mailto:rarialamdg@gmail.com?subject=Rariala"
                            class="menu-link contact w-inline-block"
                            ><img src="assets/images/envelope.png" alt="" class="image-icon-3"
                          /></a>
                          <div
                            data-w-id="1d7c1cfb-49c9-702a-ad06-a091b53453e1"
                            class="menu-button-animation"
                          >
                            <img src="assets/images/plus-20-1-.png" alt="" class="image-105" />
                          </div>
                        </div>
                      </div>
                      <div class="div-content-3">
                        <div
                          data-w-id="257babc0-5862-1b7b-cb83-39a8627f7ec3"
                          style="opacity: 0"
                          class="div-block-125"
                        >
                          <div class="div-block-126">
                            <h1 class="heading-76">Singulièrement vôtre,</h1>
                            <h1
                              id="w-node-_8b03daf6-5fc5-3faa-b4d0-b4b21f9df2d8-dc7bbc2d"
                              class="heading-74"
                            >
                              Voulez-vous<strong><em class="italic-text"> un sac</em></strong>
                              <br />qui vous ressemble ?
                            </h1>
                          </div>
                          <div class="text-block-141">
                            Rariala a été créée pour cette raison, Personnalisez vôtre sac en
                            fibres naturelles chez Rariala. Découvrez l’âme de l’artisanat
                            malgache combiné à l’innovation digital à travers des créations
                            uniques.<br />‍
                          </div>
                          <div class="div-buttons">
                            <div class="div-bouton-new">
                              <a
                                href="/creer"
                                class="link-block-16 w-inline-block"
                                ><div
                                  data-w-id="b4077575-0e35-7a17-864f-7ea6b11bd5d6"
                                  class="button-01"
                                >
                                  <div class="button-text-01">Je personnalise</div>
                                  <img
                                    src="assets/images/pen-fancy-20-1-.png"
                                    loading="lazy"
                                    style="opacity: 0"
                                    alt=""
                                    class="arrow-01"
                                  />
                                  <div
                                    style="
                                      -webkit-transform: translate3d(0, -50%, 0)
                                        scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0)
                                        skew(0, 0);
                                      -moz-transform: translate3d(0, -50%, 0) scale3d(1, 1, 1)
                                        rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
                                      -ms-transform: translate3d(0, -50%, 0) scale3d(1, 1, 1)
                                        rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
                                      transform: translate3d(0, -50%, 0) scale3d(1, 1, 1)
                                        rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
                                    "
                                    class="dot-01"
                                  ></div></div
                              ></a>
                              <div class="div-wrapper">
                                <div>
                                  <a href="/nos-produits" class="bouton-div w-button"
                                    >J&#x27;achète</a
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <section class="product-section">
                      <div class="div-block-49">
                        <h1 class="heading-page cote _30">
                          Découvrez nos <strong class="bold-text-7">Best-sellers.</strong>
                        </h1>
                        <p class="paragraph-apres-heading sans-margin">
                          Notre sélection exclusive de best-sellers, des pièces uniques qui
                          reflètent votre individualité.
                        </p>
                      </div>
                      <div class="w-layout-blockcontainer container w-container">
                        <div class="collection-list-wrapper w-dyn-list">
                          <div role="list" class="collection-wrap w-dyn-items">
                            <div role="listitem" class="collection-itemm w-dyn-item">
                              <div
                                id="w-node-_9de8ff17-bd83-2e87-8dfa-186bf5683015-dc7bbc2d"
                                class="collection-itemm"
                              >
                                <a href="/product/soavina-4" class="link-image-2 w-inline-block"
                                  ><img
                                    loading="lazy"
                                    width="2896"
                                    style="
                                      background-image: url('assets/images/soavina-20150-20000-1-.webp');
                                    "
                                    alt=""
                                    src="assets/images/soavina-20150-20000-1-.webp"
                                    data-wf-sku-bindings="%5B%7B%22from%22%3A%22f_main_image_4dr.url%22%2C%22to%22%3A%22style.background-image%22%7D%2C%7B%22from%22%3A%22f_main_image_4dr%22%2C%22to%22%3A%22src%22%7D%5D"
                                    class="image-spacing product-image-wrap"
                                /></a>
                                <div class="div-produits">
                                  <div class="div-prod">
                                    <div class="div-block-161">
                                      <h1 class="product-heading">Soavina</h1>
                                      <div
                                        data-wf-sku-bindings="%5B%7B%22from%22%3A%22f_price_%22%2C%22to%22%3A%22innerHTML%22%7D%5D"
                                        class="product-price"
                                      >
                                         150 000 Ar
                                      </div>
                                    </div>
                                    <div
                                      data-wf-sku-conditions="%7B%22condition%22%3A%7B%22fields%22%3A%7B%22default-sku%3AecSkuInventoryQuantity%22%3A%7B%22eq%22%3A0%2C%22type%22%3A%22Number%22%7D%7D%7D%2C%22timezone%22%3A%22Indian%2FAntananarivo%22%7D"
                                      class="div-block-162 w-condition-invisible"
                                    >
                                      <img
                                        src="assets/images/tag-filled-red-24x24-402x.svg"
                                        loading="lazy"
                                        alt=""
                                        class="tag-icon"
                                      />
                                      <div
                                        id="w-node-d4807e86-9798-ab21-a314-3c1612061fd6-dc7bbc2d"
                                        class="label-text hiiden"
                                      >
                                        épuisé
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="div-block-157">
                                  <a
                                    href="/product/soavina-4"
                                    class="new-button-blanc little w-button"
                                    >Voir le produit</a
                                  >
                                </div>
                                <div class="overlay-produit"></div>
                              </div>
                            </div>
                            <div role="listitem" class="collection-itemm w-dyn-item">
                              <div
                                id="w-node-_9de8ff17-bd83-2e87-8dfa-186bf5683015-dc7bbc2d"
                                class="collection-itemm"
                              >
                                <a href="/product/soavina-3" class="link-image-2 w-inline-block"
                                  ><img
                                    loading="lazy"
                                    width="2896"
                                    style="
                                      background-image: url('assets/images/soavina-20130-20000.webp');
                                    "
                                    alt=""
                                    src="assets/images/soavina-20130-20000.webp"
                                    data-wf-sku-bindings="%5B%7B%22from%22%3A%22f_main_image_4dr.url%22%2C%22to%22%3A%22style.background-image%22%7D%2C%7B%22from%22%3A%22f_main_image_4dr%22%2C%22to%22%3A%22src%22%7D%5D"
                                    class="image-spacing product-image-wrap"
                                /></a>
                                <div class="div-produits">
                                  <div class="div-prod">
                                    <div class="div-block-161">
                                      <h1 class="product-heading">Soavina</h1>
                                      <div
                                        data-wf-sku-bindings="%5B%7B%22from%22%3A%22f_price_%22%2C%22to%22%3A%22innerHTML%22%7D%5D"
                                        class="product-price"
                                      >
                                         130 000 Ar
                                      </div>
                                    </div>
                                    <div
                                      data-wf-sku-conditions="%7B%22condition%22%3A%7B%22fields%22%3A%7B%22default-sku%3AecSkuInventoryQuantity%22%3A%7B%22eq%22%3A0%2C%22type%22%3A%22Number%22%7D%7D%7D%2C%22timezone%22%3A%22Indian%2FAntananarivo%22%7D"
                                      class="div-block-162 w-condition-invisible"
                                    >
                                      <img
                                        src="assets/images/tag-filled-red-24x24-402x.svg"
                                        loading="lazy"
                                        alt=""
                                        class="tag-icon"
                                      />
                                      <div
                                        id="w-node-d4807e86-9798-ab21-a314-3c1612061fd6-dc7bbc2d"
                                        class="label-text hiiden"
                                      >
                                        épuisé
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="div-block-157">
                                  <a
                                    href="/product/soavina-3"
                                    class="new-button-blanc little w-button"
                                    >Voir le produit</a
                                  >
                                </div>
                                <div class="overlay-produit"></div>
                              </div>
                            </div>
                            <div role="listitem" class="collection-itemm w-dyn-item">
                              <div
                                id="w-node-_9de8ff17-bd83-2e87-8dfa-186bf5683015-dc7bbc2d"
                                class="collection-itemm"
                              >
                                <a
                                  href="/product/harinala-3"
                                  class="link-image-2 w-inline-block"
                                  ><img
                                    loading="lazy"
                                    width="2896"
                                    style="background-image: url('assets/images/rariala02726.webp')"
                                    alt=""
                                    src="assets/images/rariala02726.webp"
                                    data-wf-sku-bindings="%5B%7B%22from%22%3A%22f_main_image_4dr.url%22%2C%22to%22%3A%22style.background-image%22%7D%2C%7B%22from%22%3A%22f_main_image_4dr%22%2C%22to%22%3A%22src%22%7D%5D"
                                    class="image-spacing product-image-wrap"
                                /></a>
                                <div class="div-produits">
                                  <div class="div-prod">
                                    <div class="div-block-161">
                                      <h1 class="product-heading">Harinala</h1>
                                      <div
                                        data-wf-sku-bindings="%5B%7B%22from%22%3A%22f_price_%22%2C%22to%22%3A%22innerHTML%22%7D%5D"
                                        class="product-price"
                                      >
                                         90 000 Ar
                                      </div>
                                    </div>
                                    <div
                                      data-wf-sku-conditions="%7B%22condition%22%3A%7B%22fields%22%3A%7B%22default-sku%3AecSkuInventoryQuantity%22%3A%7B%22eq%22%3A0%2C%22type%22%3A%22Number%22%7D%7D%7D%2C%22timezone%22%3A%22Indian%2FAntananarivo%22%7D"
                                      class="div-block-162 w-condition-invisible"
                                    >
                                      <img
                                        src="assets/images/tag-filled-red-24x24-402x.svg"
                                        loading="lazy"
                                        alt=""
                                        class="tag-icon"
                                      />
                                      <div
                                        id="w-node-d4807e86-9798-ab21-a314-3c1612061fd6-dc7bbc2d"
                                        class="label-text hiiden"
                                      >
                                        épuisé
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="div-block-157">
                                  <a
                                    href="/product/harinala-3"
                                    class="new-button-blanc little w-button"
                                    >Voir le produit</a
                                  >
                                </div>
                                <div class="overlay-produit"></div>
                              </div>
                            </div>
                            <div role="listitem" class="collection-itemm w-dyn-item">
                              <div
                                id="w-node-_9de8ff17-bd83-2e87-8dfa-186bf5683015-dc7bbc2d"
                                class="collection-itemm"
                              >
                                <a href="/product/harindra" class="link-image-2 w-inline-block"
                                  ><img
                                    loading="lazy"
                                    width="2896"
                                    style="background-image: url('assets/images/harindra.webp')"
                                    alt=""
                                    src="assets/images/harindra.webp"
                                    data-wf-sku-bindings="%5B%7B%22from%22%3A%22f_main_image_4dr.url%22%2C%22to%22%3A%22style.background-image%22%7D%2C%7B%22from%22%3A%22f_main_image_4dr%22%2C%22to%22%3A%22src%22%7D%5D"
                                    class="image-spacing product-image-wrap"
                                /></a>
                                <div class="div-produits">
                                  <div class="div-prod">
                                    <div class="div-block-161">
                                      <h1 class="product-heading">Harindra</h1>
                                      <div
                                        data-wf-sku-bindings="%5B%7B%22from%22%3A%22f_price_%22%2C%22to%22%3A%22innerHTML%22%7D%5D"
                                        class="product-price"
                                      >
                                         130 000 Ar
                                      </div>
                                    </div>
                                    <div
                                      data-wf-sku-conditions="%7B%22condition%22%3A%7B%22fields%22%3A%7B%22default-sku%3AecSkuInventoryQuantity%22%3A%7B%22eq%22%3A0%2C%22type%22%3A%22Number%22%7D%7D%7D%2C%22timezone%22%3A%22Indian%2FAntananarivo%22%7D"
                                      class="div-block-162 w-condition-invisible"
                                    >
                                      <img
                                        src="assets/images/tag-filled-red-24x24-402x.svg"
                                        loading="lazy"
                                        alt=""
                                        class="tag-icon"
                                      />
                                      <div
                                        id="w-node-d4807e86-9798-ab21-a314-3c1612061fd6-dc7bbc2d"
                                        class="label-text hiiden"
                                      >
                                        épuisé
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="div-block-157">
                                  <a
                                    href="/product/harindra"
                                    class="new-button-blanc little w-button"
                                    >Voir le produit</a
                                  >
                                </div>
                                <div class="overlay-produit"></div>
                              </div>
                            </div>
                            <div role="listitem" class="collection-itemm w-dyn-item">
                              <div
                                id="w-node-_9de8ff17-bd83-2e87-8dfa-186bf5683015-dc7bbc2d"
                                class="collection-itemm"
                              >
                                <a href="/product/hirantsoa" class="link-image-2 w-inline-block"
                                  ><img
                                    loading="lazy"
                                    width="2896"
                                    style="background-image: url('assets/images/hirantsoa.webp')"
                                    alt=""
                                    src="assets/images/hirantsoa.webp"
                                    data-wf-sku-bindings="%5B%7B%22from%22%3A%22f_main_image_4dr.url%22%2C%22to%22%3A%22style.background-image%22%7D%2C%7B%22from%22%3A%22f_main_image_4dr%22%2C%22to%22%3A%22src%22%7D%5D"
                                    class="image-spacing product-image-wrap"
                                /></a>
                                <div class="div-produits">
                                  <div class="div-prod">
                                    <div class="div-block-161">
                                      <h1 class="product-heading">Hirantsoa</h1>
                                      <div
                                        data-wf-sku-bindings="%5B%7B%22from%22%3A%22f_price_%22%2C%22to%22%3A%22innerHTML%22%7D%5D"
                                        class="product-price"
                                      >
                                         120 000 Ar
                                      </div>
                                    </div>
                                    <div
                                      data-wf-sku-conditions="%7B%22condition%22%3A%7B%22fields%22%3A%7B%22default-sku%3AecSkuInventoryQuantity%22%3A%7B%22eq%22%3A0%2C%22type%22%3A%22Number%22%7D%7D%7D%2C%22timezone%22%3A%22Indian%2FAntananarivo%22%7D"
                                      class="div-block-162 w-condition-invisible"
                                    >
                                      <img
                                        src="assets/images/tag-filled-red-24x24-402x.svg"
                                        loading="lazy"
                                        alt=""
                                        class="tag-icon"
                                      />
                                      <div
                                        id="w-node-d4807e86-9798-ab21-a314-3c1612061fd6-dc7bbc2d"
                                        class="label-text hiiden"
                                      >
                                        épuisé
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="div-block-157">
                                  <a
                                    href="/product/hirantsoa"
                                    class="new-button-blanc little w-button"
                                    >Voir le produit</a
                                  >
                                </div>
                                <div class="overlay-produit"></div>
                              </div>
                            </div>
                            <div role="listitem" class="collection-itemm w-dyn-item">
                              <div
                                id="w-node-_9de8ff17-bd83-2e87-8dfa-186bf5683015-dc7bbc2d"
                                class="collection-itemm"
                              >
                                <a href="/product/harisoa-3" class="link-image-2 w-inline-block"
                                  ><img
                                    loading="lazy"
                                    width="2896"
                                    style="background-image: url('assets/images/harisoa-20-2-.webp')"
                                    alt=""
                                    src="assets/images/harisoa-20-2-.webp"
                                    data-wf-sku-bindings="%5B%7B%22from%22%3A%22f_main_image_4dr.url%22%2C%22to%22%3A%22style.background-image%22%7D%2C%7B%22from%22%3A%22f_main_image_4dr%22%2C%22to%22%3A%22src%22%7D%5D"
                                    class="image-spacing product-image-wrap"
                                /></a>
                                <div class="div-produits">
                                  <div class="div-prod">
                                    <div class="div-block-161">
                                      <h1 class="product-heading">Harisoa</h1>
                                      <div
                                        data-wf-sku-bindings="%5B%7B%22from%22%3A%22f_price_%22%2C%22to%22%3A%22innerHTML%22%7D%5D"
                                        class="product-price"
                                      >
                                         90 000 Ar
                                      </div>
                                    </div>
                                    <div
                                      data-wf-sku-conditions="%7B%22condition%22%3A%7B%22fields%22%3A%7B%22default-sku%3AecSkuInventoryQuantity%22%3A%7B%22eq%22%3A0%2C%22type%22%3A%22Number%22%7D%7D%7D%2C%22timezone%22%3A%22Indian%2FAntananarivo%22%7D"
                                      class="div-block-162 w-condition-invisible"
                                    >
                                      <img
                                        src="assets/images/tag-filled-red-24x24-402x.svg"
                                        loading="lazy"
                                        alt=""
                                        class="tag-icon"
                                      />
                                      <div
                                        id="w-node-d4807e86-9798-ab21-a314-3c1612061fd6-dc7bbc2d"
                                        class="label-text hiiden"
                                      >
                                        épuisé
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="div-block-157">
                                  <a
                                    href="/product/harisoa-3"
                                    class="new-button-blanc little w-button"
                                    >Voir le produit</a
                                  >
                                </div>
                                <div class="overlay-produit"></div>
                              </div>
                            </div>
                            <div role="listitem" class="collection-itemm w-dyn-item">
                              <div
                                id="w-node-_9de8ff17-bd83-2e87-8dfa-186bf5683015-dc7bbc2d"
                                class="collection-itemm"
                              >
                                <a href="/product/harisoa-2" class="link-image-2 w-inline-block"
                                  ><img
                                    loading="lazy"
                                    width="2896"
                                    style="
                                      background-image: url('assets/images/harisoa-20-1-20-1-.webp');
                                    "
                                    alt=""
                                    src="assets/images/harisoa-20-1-20-1-.webp"
                                    data-wf-sku-bindings="%5B%7B%22from%22%3A%22f_main_image_4dr.url%22%2C%22to%22%3A%22style.background-image%22%7D%2C%7B%22from%22%3A%22f_main_image_4dr%22%2C%22to%22%3A%22src%22%7D%5D"
                                    class="image-spacing product-image-wrap"
                                /></a>
                                <div class="div-produits">
                                  <div class="div-prod">
                                    <div class="div-block-161">
                                      <h1 class="product-heading">Harisoa</h1>
                                      <div
                                        data-wf-sku-bindings="%5B%7B%22from%22%3A%22f_price_%22%2C%22to%22%3A%22innerHTML%22%7D%5D"
                                        class="product-price"
                                      >
                                         90 000 Ar
                                      </div>
                                    </div>
                                    <div
                                      data-wf-sku-conditions="%7B%22condition%22%3A%7B%22fields%22%3A%7B%22default-sku%3AecSkuInventoryQuantity%22%3A%7B%22eq%22%3A0%2C%22type%22%3A%22Number%22%7D%7D%7D%2C%22timezone%22%3A%22Indian%2FAntananarivo%22%7D"
                                      class="div-block-162 w-condition-invisible"
                                    >
                                      <img
                                        src="assets/images/tag-filled-red-24x24-402x.svg"
                                        loading="lazy"
                                        alt=""
                                        class="tag-icon"
                                      />
                                      <div
                                        id="w-node-d4807e86-9798-ab21-a314-3c1612061fd6-dc7bbc2d"
                                        class="label-text hiiden"
                                      >
                                        épuisé
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="div-block-157">
                                  <a
                                    href="/product/harisoa-2"
                                    class="new-button-blanc little w-button"
                                    >Voir le produit</a
                                  >
                                </div>
                                <div class="overlay-produit"></div>
                              </div>
                            </div>
                            <div role="listitem" class="collection-itemm w-dyn-item">
                              <div
                                id="w-node-_9de8ff17-bd83-2e87-8dfa-186bf5683015-dc7bbc2d"
                                class="collection-itemm"
                              >
                                <a href="/product/harisoa" class="link-image-2 w-inline-block"
                                  ><img
                                    loading="lazy"
                                    width="2896"
                                    style="background-image: url('assets/images/harisoa.webp')"
                                    alt=""
                                    src="assets/images/harisoa.webp"
                                    data-wf-sku-bindings="%5B%7B%22from%22%3A%22f_main_image_4dr.url%22%2C%22to%22%3A%22style.background-image%22%7D%2C%7B%22from%22%3A%22f_main_image_4dr%22%2C%22to%22%3A%22src%22%7D%5D"
                                    class="image-spacing product-image-wrap"
                                /></a>
                                <div class="div-produits">
                                  <div class="div-prod">
                                    <div class="div-block-161">
                                      <h1 class="product-heading">Harisoa</h1>
                                      <div
                                        data-wf-sku-bindings="%5B%7B%22from%22%3A%22f_price_%22%2C%22to%22%3A%22innerHTML%22%7D%5D"
                                        class="product-price"
                                      >
                                         90 000 Ar
                                      </div>
                                    </div>
                                    <div
                                      data-wf-sku-conditions="%7B%22condition%22%3A%7B%22fields%22%3A%7B%22default-sku%3AecSkuInventoryQuantity%22%3A%7B%22eq%22%3A0%2C%22type%22%3A%22Number%22%7D%7D%7D%2C%22timezone%22%3A%22Indian%2FAntananarivo%22%7D"
                                      class="div-block-162 w-condition-invisible"
                                    >
                                      <img
                                        src="assets/images/tag-filled-red-24x24-402x.svg"
                                        loading="lazy"
                                        alt=""
                                        class="tag-icon"
                                      />
                                      <div
                                        id="w-node-d4807e86-9798-ab21-a314-3c1612061fd6-dc7bbc2d"
                                        class="label-text hiiden"
                                      >
                                        épuisé
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="div-block-157">
                                  <a
                                    href="/product/harisoa"
                                    class="new-button-blanc little w-button"
                                    >Voir le produit</a
                                  >
                                </div>
                                <div class="overlay-produit"></div>
                              </div>
                            </div>
                            <div role="listitem" class="collection-itemm w-dyn-item">
                              <div
                                id="w-node-_9de8ff17-bd83-2e87-8dfa-186bf5683015-dc7bbc2d"
                                class="collection-itemm"
                              >
                                <a
                                  href="/product/harinala-2"
                                  class="link-image-2 w-inline-block"
                                  ><img
                                    loading="lazy"
                                    width="2896"
                                    style="background-image: url('assets/images/rariala02721.webp')"
                                    alt=""
                                    src="assets/images/rariala02721.webp"
                                    data-wf-sku-bindings="%5B%7B%22from%22%3A%22f_main_image_4dr.url%22%2C%22to%22%3A%22style.background-image%22%7D%2C%7B%22from%22%3A%22f_main_image_4dr%22%2C%22to%22%3A%22src%22%7D%5D"
                                    class="image-spacing product-image-wrap"
                                /></a>
                                <div class="div-produits">
                                  <div class="div-prod">
                                    <div class="div-block-161">
                                      <h1 class="product-heading">Harinala</h1>
                                      <div
                                        data-wf-sku-bindings="%5B%7B%22from%22%3A%22f_price_%22%2C%22to%22%3A%22innerHTML%22%7D%5D"
                                        class="product-price"
                                      >
                                         100 000 Ar
                                      </div>
                                    </div>
                                    <div
                                      data-wf-sku-conditions="%7B%22condition%22%3A%7B%22fields%22%3A%7B%22default-sku%3AecSkuInventoryQuantity%22%3A%7B%22eq%22%3A0%2C%22type%22%3A%22Number%22%7D%7D%7D%2C%22timezone%22%3A%22Indian%2FAntananarivo%22%7D"
                                      class="div-block-162 w-condition-invisible"
                                    >
                                      <img
                                        src="assets/images/tag-filled-red-24x24-402x.svg"
                                        loading="lazy"
                                        alt=""
                                        class="tag-icon"
                                      />
                                      <div
                                        id="w-node-d4807e86-9798-ab21-a314-3c1612061fd6-dc7bbc2d"
                                        class="label-text hiiden"
                                      >
                                        épuisé
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="div-block-157">
                                  <a
                                    href="/product/harinala-2"
                                    class="new-button-blanc little w-button"
                                    >Voir le produit</a
                                  >
                                </div>
                                <div class="overlay-produit"></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </section>
                    <section class="section-propos">
                      <div class="w-layout-blockcontainer container-slider w-container">
                        <div
                          data-delay="4000"
                          data-animation="over"
                          class="slider-7 w-slider"
                          data-autoplay="true"
                          data-easing="ease"
                          data-hide-arrows="false"
                          data-disable-swipe="false"
                          data-autoplay-limit="0"
                          data-nav-spacing="8"
                          data-duration="400"
                          data-infinite="true"
                        >
                          <div class="w-slider-mask">
                            <div class="slide-15 w-slide">
                              <div class="div-slider-3">
                                <div class="k-content-pair-row">
                                  <div class="k-content-col">
                                    <div class="k-max-30">
                                      <div class="heading-2-wrapper heading-space-2">
                                        <h2 class="heading-82">
                                          Rariala,
                                          <strong class="bold-text-11-copy"
                                            >c&#x27;est quoi ?</strong
                                          >
                                        </h2>
                                      </div>
                                      <div class="k-heading-line"></div>
                                      <div class="k-para-wrap k-before-1">
                                        <p class="k-para-1 k-text-gray-1">
                                          Le résultat de la fusion entre la passion et le
                                          travail acharné a donné naissance à la marque Rariala.
                                          Rariala est spécialisée dans la fabrication
                                          d&#x27;articles en fibres naturelles. Le nom
                                          &quot;Rariala&quot; est un clin d&#x27;œil à
                                          l&#x27;asa tanana, qui symbolise notre foi
                                          inébranlable dans le talent et le savoir-faire de nos
                                          artisans.
                                        </p>
                                      </div>
                                      <div class="k-button-wrap btn-wrap-1">
                                        <a href="/about" class="bouton-noir w-button"
                                          >Découvrir Rariala</a
                                        >
                                      </div>
                                    </div>
                                  </div>
                                  <div class="k-content-col">
                                    <div class="k-side-img-wrap">
                                      <img
                                        src="assets/images/rariala02635.webp"
                                        loading="lazy"
                                        width="2896"
                                        alt=""
                                        class="k-slide-cover-img"
                                      />
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="w-slide">
                              <div class="div-slider-3">
                                <div class="k-content-pair-row">
                                  <div class="k-content-col">
                                    <div class="k-max-30">
                                      <div class="heading-2-wrapper-copy heading-space-2">
                                        <h2 class="heading-82-copy">
                                          Les produits de chez
                                          <strong class="bold-text-11-copy med"
                                            >Rariala,
                                          </strong>
                                        </h2>
                                      </div>
                                      <div class="k-heading-line"></div>
                                      <div class="k-para-wrap k-before-1">
                                        <p class="k-para-1 k-text-gray-1">
                                          L&#x27;univers des produits Rariala, où
                                          l&#x27;authenticité rencontre l&#x27;élégance pour
                                          créer des pièces uniques. Notre collection incarne le
                                          mariage parfait entre le savoir-faire artisanal
                                          malgacheet un design moderne et raffiné.
                                        </p>
                                      </div>
                                      <div class="div-bouton-new _100">
                                        <a
                                          href="/creez-votre-sac-personnalise"
                                          class="link-block-16 w-inline-block"
                                          ><div
                                            data-w-id="e97c5e47-b4b4-ef8d-32d4-90adcd91bfe1"
                                            class="button-01"
                                          >
                                            <div class="button-text-01">Je personnalise</div>
                                            <img
                                              src="assets/images/pen-fancy-20-1-.png"
                                              loading="lazy"
                                              style="opacity: 0"
                                              alt=""
                                              class="arrow-01"
                                            />
                                            <div
                                              style="
                                                -webkit-transform: translate3d(0, -50%, 0)
                                                  scale3d(1, 1, 1) rotateX(0) rotateY(0)
                                                  rotateZ(0) skew(0, 0);
                                                -moz-transform: translate3d(0, -50%, 0)
                                                  scale3d(1, 1, 1) rotateX(0) rotateY(0)
                                                  rotateZ(0) skew(0, 0);
                                                -ms-transform: translate3d(0, -50%, 0)
                                                  scale3d(1, 1, 1) rotateX(0) rotateY(0)
                                                  rotateZ(0) skew(0, 0);
                                                transform: translate3d(0, -50%, 0)
                                                  scale3d(1, 1, 1) rotateX(0) rotateY(0)
                                                  rotateZ(0) skew(0, 0);
                                              "
                                              class="dot-01"
                                            ></div></div
                                        ></a>
                                        <div class="div-wrapper">
                                          <div>
                                            <a href="/nos-produits" class="bouton-noir w-button"
                                              >J&#x27;achète</a
                                            >
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="k-content-col">
                                    <div class="k-side-img-wrap">
                                      <img
                                        src="assets/images/rariala02645.webp"
                                        loading="lazy"
                                        sizes="(max-width: 479px) 100vw, (max-width: 767px) 88vw, (max-width: 991px) 89vw, (max-width: 1439px) 42vw, 47vw"
                                        srcset="
                                          assets/images/rariala02645-p-500.webp   500w,
                                          assets/images/rariala02645-p-800.webp   800w,
                                          assets/images/rariala02645-p-1080.webp 1080w,
                                          assets/images/rariala02645-p-1600.webp 1600w,
                                          assets/images/rariala02645-p-2000.webp 2000w,
                                          assets/images/rariala02645-p-2600.webp 2600w,
                                          assets/images/rariala02645-p-3200.webp 3200w,
                                          assets/images/rariala02645.webp        5792w
                                        "
                                        alt=""
                                        class="k-slide-cover-img"
                                      />
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="w-slide">
                              <div class="div-slider-3">
                                <div class="k-content-pair-row">
                                  <div class="k-content-col">
                                    <div class="k-max-30">
                                      <div class="heading-2-wrapper heading-space-2">
                                        <h2 class="heading-82-copy">
                                          Pour choisir le sac parfait? <br />contactez
                                          <strong><em> </em></strong
                                          ><strong class="bold-text-11-copy"
                                            ><em class="italic-text-3">Rariala</em>,
                                          </strong>
                                        </h2>
                                      </div>
                                      <div class="k-heading-line"></div>
                                      <div class="k-para-wrap k-before-1">
                                        <p class="k-para-1 k-text-gray-1">
                                          Besoin d&#x27;aide pour choisir le sac parfait ou
                                          simplement envie de discuter de notre artisanat ?
                                          Contactez nous maintenant. Nous sommes là pour rendre
                                          votre expérience exceptionnelle.
                                        </p>
                                      </div>
                                      <div class="k-button-wrap btn-wrap-1">
                                        <a href="/contact" class="bouton-noir w-button"
                                          >Contactez-nous</a
                                        >
                                      </div>
                                    </div>
                                  </div>
                                  <div class="k-content-col">
                                    <div class="k-side-img-wrap">
                                      <img
                                        src="assets/images/rariala02617-20-1-.webp"
                                        loading="lazy"
                                        sizes="(max-width: 479px) 100vw, (max-width: 767px) 88vw, (max-width: 991px) 89vw, (max-width: 1439px) 42vw, 47vw"
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
                                        alt=""
                                        class="k-slide-cover-img"
                                      />
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div
                            class="slide-nav-8 w-slider-nav w-slider-nav-invert w-shadow w-round"
                          ></div>
                        </div>
                      </div>
                    </section>
                    <footer>
                      @include('footer')
                    </footer>
                </div>
            </div>
        </div>
    </body>
</html>
{{-- Mumu --}}

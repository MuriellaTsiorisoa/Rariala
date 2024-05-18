<!DOCTYPE html>
<html
  data-wf-page="65e18c7f1e395b37dc7bbc40"
  data-wf-site="65e18c7f1e395b37dc7bbc49"
  data-wf-status="1"
  lang="en"
>
  <head>
    <meta charset="utf-8" />
    <title>Facture</title>
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="Webflow" name="generator" />
    <link href="{{asset('assets/css/facture-style.css')}}"
    rel="stylesheet" type="text/css" />
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
    <link
      href="https://assets-global.website-files.com/6564ceb91a2a667269ff6317/65b3501d63f2e308adff29b1_Noir%201%20png.png"
      rel="shortcut icon"
      type="image/x-icon"
    />
    <link
      href="https://assets-global.website-files.com/65e18c7f1e395b37dc7bbc49/65e18c7f1e395b37dc7bbcd3_Noir%201%20png%20(1).png"
      rel="apple-touch-icon"
    />
  </head>
  <body class="body-8">
    <div
      data-w-id="6586f4c9-817d-9ab6-d864-cbd302ce3153"
      style="opacity: 0"
      class="cloneable-container-default"
    >
      <div
        data-w-id="6586f4c9-817d-9ab6-d864-cbd302ce3154"
        class="popup-wrapper---brix preview-page"
      >
        <div
          class="popup-content-wrapper---brix popup-1-content-wrapper---brix-copy"
        >
          <div class="popup-1---brix">
            <img
            src="assets/images/check.png"

              loading="lazy"
              width="100"
              height="100"
              alt=""
              class="image-112"
            />
            <h2 class="heading-89">
              Vous venez de recevoir un email de confirmation de vôtre
              <br />commande.
            </h2>
            <p class="paragraph-59">
              Toutes les équipes de Rariala vous remercient.
            </p>
            <img
            src="assets/images/close.svg"
              data-w-id="6586f4c9-817d-9ab6-d864-cbd302ce3166"
              width="16"
              height="16"
              alt=""
              class="close-popup---brix"
            />
          </div>
        </div>
        <div
          data-w-id="6586f4c9-817d-9ab6-d864-cbd302ce3167"
          class="overlay---brix"
        ></div>
      </div>
      <div class="dummy-hero-wrapper---brix preview-page---brix">
        <div
          data-w-id="6586f4c9-817d-9ab6-d864-cbd302ce3169"
          style="
            -webkit-transform: translate3d(0, 0, 0) scale3d(0.97, 0.97, 1)
              rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
            -moz-transform: translate3d(0, 0, 0) scale3d(0.97, 0.97, 1)
              rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
            -ms-transform: translate3d(0, 0, 0) scale3d(0.97, 0.97, 1)
              rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
            transform: translate3d(0, 0, 0) scale3d(0.97, 0.97, 1) rotateX(0)
              rotateY(0) rotateZ(0) skew(0, 0);
            opacity: 0;
          "
          class="limit-content---brix"
        >
          <div
            data-node-type="commerce-order-confirmation-wrapper"
            data-wf-order-query="query Dynamo2($finalizedOrder: commerce_order_finalized_order_args) {
  database {
    id
    commerceOrder(finalizedOrder: $finalizedOrder) {
      availableShippingMethods {
        description
        id
        mode
        name
        price {
          value
          unit
          decimalValue
          string
        }
        selected
      }
      comment
      customData {
        checkbox
        name
        textArea
        textInput
      }
      customerInfo {
        billingAddress {
          addressee
          city
          country
          japanType
          line1
          line2
          postalCode
          state
          type
        }
        identity {
          email
          fullName
        }
        shippingAddress {
          addressee
          city
          country
          japanType
          line1
          line2
          postalCode
          state
          type
        }
        stripePayment {
          card {
            expires {
              month
              year
            }
            last4
            provided
            provider
          }
        }
      }
      downloadFiles {
        id
        name
        url
      }
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
      paymentProcessor
      startedOn
      statusFlags {
        billingAddressRequiresPostalCode
        hasDownloads
        hasSubscription
        isFreeOrder
        needAddress
        needIdentity
        needItems
        needPayment
        requiresShipping
        shippingAddressRequiresPostalCode
        shouldRecalc
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
            class="w-commerce-commerceorderconfirmationcontainer full-width-form-2"
          >
            <div
              class="w-commerce-commerceorderconfirmation order-confirmation-container-2"
            >
              <div
                class="w-commerce-commerceorderconfirmationheaderwrapper order-confirmation-header-wrapper"
              >
                <div class="container-30 cc-full-width-form-wrap">
                  <div class="div-block-152">
                    <a href="/" target="_blank" class="w-inline-block"
                      ><img
                        src="https://assets-global.website-files.com/65e18c7f1e395b37dc7bbc49/663db9371fe839efca076c27_Noir%202%20png.png"
                        loading="lazy"
                        width="150"
                        height="150"
                        alt=""
                        srcset="
                          https://assets-global.website-files.com/65e18c7f1e395b37dc7bbc49/663db9371fe839efca076c27_Noir%202%20png-p-500.png   500w,
                          https://assets-global.website-files.com/65e18c7f1e395b37dc7bbc49/663db9371fe839efca076c27_Noir%202%20png-p-800.png   800w,
                          https://assets-global.website-files.com/65e18c7f1e395b37dc7bbc49/663db9371fe839efca076c27_Noir%202%20png-p-1080.png 1080w,
                          https://assets-global.website-files.com/65e18c7f1e395b37dc7bbc49/663db9371fe839efca076c27_Noir%202%20png-p-1600.png 1600w,
                          https://assets-global.website-files.com/65e18c7f1e395b37dc7bbc49/663db9371fe839efca076c27_Noir%202%20png-p-2000.png 2000w,
                          https://assets-global.website-files.com/65e18c7f1e395b37dc7bbc49/663db9371fe839efca076c27_Noir%202%20png-p-2600.png 2600w,
                          https://assets-global.website-files.com/65e18c7f1e395b37dc7bbc49/663db9371fe839efca076c27_Noir%202%20png-p-3200.png 3200w,
                          https://assets-global.website-files.com/65e18c7f1e395b37dc7bbc49/663db9371fe839efca076c27_Noir%202%20png.png        5545w
                        "
                        sizes="(max-width: 479px) 100vw, (max-width: 767px) 22vw, 150px"
                    /></a>
                    <div class="div-nom">
                      <div class="text-block-152">
                        <strong class="bold-text-29">Nom  :</strong> Andria
                      </div>
                      <div class="text-block-152">
                        <strong class="bold-text-28">Téléphone:</strong> 034 00
                        000 00
                      </div>
                      <div class="text-block-152">
                        <strong class="bold-text-27"
                          >Adresse de livraison  :</strong
                        >
                        I2 20 Mahamasina
                      </div>
                      <div class="text-block-152">
                        <strong class="bold-text-26"
                          >Repérage de livraison :</strong
                        >
                        Stade Baréa
                      </div>
                    </div>
                  </div>
                  <div class="w-commerce-commercelayoutmain div-block-70">
                    <div
                      class="w-commerce-commercecheckoutorderitemswrapper order-items-3"
                    >
                      <fieldset
                        class="w-commerce-commercecheckoutblockcontent block-content-3"
                      >
                        <div class="k-cart-header">
                          <div class="text-uppercase">Produits</div>
                          <div class="text-uppercase">description</div>
                          <div class="text-uppercase">Quantite</div>
                          <div class="text-uppercase">PRIX</div>
                          <div class="text-uppercase">TOTAL</div>
                        </div>
                        <script
                          type="text/x-wf-template"
                          id="wf-template-099c341c-a253-9c4d-bbe7-e511181ead94"
                        >
                          %3Cdiv%20role%3D%22listitem%22%20class%3D%22w-commerce-commercecheckoutorderitem%20order-item-2%22%3E%3Cimg%20id%3D%22w-node-_099c341c-a253-9c4d-bbe7-e511181ead96%22%20data-wf-bindings%3D%22%255B%257B%2522src%2522%253A%257B%2522type%2522%253A%2522ImageRef%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522identity%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.sku.f_main_image_4dr%2522%257D%257D%255D%22%20src%3D%22%22%20alt%3D%22%22%20class%3D%22w-commerce-commercecartitemimage%20image-39%20w-dyn-bind-empty%22%2F%3E%3Cdiv%20id%3D%22w-node-_60d66a4e-5c0f-c6e1-ccad-e0f99cc1d35a%22%3E%3Cdiv%20id%3D%22w-node-_099c341c-a253-9c4d-bbe7-e511181ead99%22%20data-wf-bindings%3D%22%255B%257B%2522innerHTML%2522%253A%257B%2522type%2522%253A%2522PlainText%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522identity%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.product.f_name_%2522%257D%257D%255D%22%20class%3D%22w-commerce-commerceboldtextblock%20product-heading-copy%20cart%20w-dyn-bind-empty%22%3E%3C%2Fdiv%3E%3Cdiv%20id%3D%22w-node-_099c341c-a253-9c4d-bbe7-e511181ead98%22%20class%3D%22w-commerce-commercecheckoutorderitemdescriptionwrapper%20order-item-content-wrap%22%3E%3Cscript%20type%3D%22text%2Fx-wf-template%22%20id%3D%22wf-template-099c341c-a253-9c4d-bbe7-e511181ead9e%22%3E%253Cli%2520class%253D%2522option-5%2522%253E%253Cspan%2520class%253D%2522text-block-122%2522%2520data-wf-bindings%253D%2522%25255B%25257B%252522innerHTML%252522%25253A%25257B%252522type%252522%25253A%252522PlainText%252522%25252C%252522filter%252522%25253A%25257B%252522type%252522%25253A%252522identity%252522%25252C%252522params%252522%25253A%25255B%25255D%25257D%25252C%252522dataPath%252522%25253A%252522database.commerceOrder.userItems%25255B%25255D.product.f_sku_properties_3dr%25255B%25255D.name%252522%25257D%25257D%25255D%2522%253E%253C%252Fspan%253E%253Cspan%2520class%253D%2522span%2522%253E%253A%2520%253C%252Fspan%253E%253Cspan%2520class%253D%2522text-block-123%2522%2520data-wf-bindings%253D%2522%25255B%25257B%252522innerHTML%252522%25253A%25257B%252522type%252522%25253A%252522CommercePropValues%252522%25252C%252522filter%252522%25253A%25257B%252522type%252522%25253A%252522identity%252522%25252C%252522params%252522%25253A%25255B%25255D%25257D%25252C%252522dataPath%252522%25253A%252522database.commerceOrder.userItems%25255B%25255D.product.f_sku_properties_3dr%25255B%25255D%252522%25257D%25257D%25255D%2522%253E%253C%252Fspan%253E%253C%252Fli%253E%3C%2Fscript%3E%3Cul%20data-wf-bindings%3D%22%255B%257B%2522optionSets%2522%253A%257B%2522type%2522%253A%2522CommercePropTable%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522identity%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.product.f_sku_properties_3dr%5B%5D%2522%257D%257D%252C%257B%2522optionValues%2522%253A%257B%2522type%2522%253A%2522CommercePropValues%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522identity%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.sku.f_sku_values_3dr%2522%257D%257D%255D%22%20class%3D%22w-commerce-commercecheckoutorderitemoptionlist%20option-list-3%22%20data-wf-collection%3D%22database.commerceOrder.userItems%255B%255D.product.f_sku_properties_3dr%22%20data-wf-template-id%3D%22wf-template-099c341c-a253-9c4d-bbe7-e511181ead9e%22%3E%3Cli%20class%3D%22option-5%22%3E%3Cspan%20class%3D%22text-block-122%22%20data-wf-bindings%3D%22%255B%257B%2522innerHTML%2522%253A%257B%2522type%2522%253A%2522PlainText%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522identity%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.product.f_sku_properties_3dr%255B%255D.name%2522%257D%257D%255D%22%3E%3C%2Fspan%3E%3Cspan%20class%3D%22span%22%3E%3A%20%3C%2Fspan%3E%3Cspan%20class%3D%22text-block-123%22%20data-wf-bindings%3D%22%255B%257B%2522innerHTML%2522%253A%257B%2522type%2522%253A%2522CommercePropValues%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522identity%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.product.f_sku_properties_3dr%255B%255D%2522%257D%257D%255D%22%3E%3C%2Fspan%3E%3C%2Fli%3E%3C%2Ful%3E%3C%2Fdiv%3E%3C%2Fdiv%3E%3Cdiv%20id%3D%22w-node-_099c341c-a253-9c4d-bbe7-e511181eada4%22%20data-wf-bindings%3D%22%255B%257B%2522innerHTML%2522%253A%257B%2522type%2522%253A%2522CommercePrice%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522price%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.rowTotal%2522%257D%257D%255D%22%20class%3D%22product-price-copy-copy%20sans-margin%22%3E%240.00%3C%2Fdiv%3E%3Cdiv%20id%3D%22w-node-_099c341c-a253-9c4d-bbe7-e511181ead9d%22%20data-wf-bindings%3D%22%255B%257B%2522innerHTML%2522%253A%257B%2522type%2522%253A%2522Number%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522numberPrecision%2522%252C%2522params%2522%253A%255B%25220%2522%252C%2522numberPrecision%2522%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.count%2522%257D%257D%255D%22%20class%3D%22text-block-105%22%3E1%3C%2Fdiv%3E%3Cdiv%20id%3D%22w-node-_7adea718-89d2-1a7b-fa8c-4456275321a6%22%20data-wf-bindings%3D%22%255B%257B%2522innerHTML%2522%253A%257B%2522type%2522%253A%2522CommercePrice%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522price%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.price%2522%257D%257D%255D%22%20class%3D%22product-price-copy-copy%20sans-margin%22%3E%240.00%3C%2Fdiv%3E%3C%2Fdiv%3E
                        </script>
                        <div
                          role="list"
                          class="w-commerce-commercecheckoutorderitemslist order-item-list"
                          data-wf-collection="database.commerceOrder.userItems"
                          data-wf-template-id="wf-template-099c341c-a253-9c4d-bbe7-e511181ead94"
                        >
                          <div
                            role="listitem"
                            class="w-commerce-commercecheckoutorderitem order-item-2"
                          >
                            <img
                              id="w-node-_099c341c-a253-9c4d-bbe7-e511181ead96-dc7bbc40"
                              data-wf-bindings="%5B%7B%22src%22%3A%7B%22type%22%3A%22ImageRef%22%2C%22filter%22%3A%7B%22type%22%3A%22identity%22%2C%22params%22%3A%5B%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.userItems%5B%5D.sku.f_main_image_4dr%22%7D%7D%5D"
                              src=""
                              alt=""
                              class="w-commerce-commercecartitemimage image-39 w-dyn-bind-empty"
                            />
                            <div
                              id="w-node-_60d66a4e-5c0f-c6e1-ccad-e0f99cc1d35a-dc7bbc40"
                            >
                              <div
                                id="w-node-_099c341c-a253-9c4d-bbe7-e511181ead99-dc7bbc40"
                                data-wf-bindings="%5B%7B%22innerHTML%22%3A%7B%22type%22%3A%22PlainText%22%2C%22filter%22%3A%7B%22type%22%3A%22identity%22%2C%22params%22%3A%5B%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.userItems%5B%5D.product.f_name_%22%7D%7D%5D"
                                class="w-commerce-commerceboldtextblock product-heading-copy cart w-dyn-bind-empty"
                              ></div>
                              <div
                                id="w-node-_099c341c-a253-9c4d-bbe7-e511181ead98-dc7bbc40"
                                class="w-commerce-commercecheckoutorderitemdescriptionwrapper order-item-content-wrap"
                              >
                                <script
                                  type="text/x-wf-template"
                                  id="wf-template-099c341c-a253-9c4d-bbe7-e511181ead9e"
                                >
                                  %3Cli%20class%3D%22option-5%22%3E%3Cspan%20class%3D%22text-block-122%22%20data-wf-bindings%3D%22%255B%257B%2522innerHTML%2522%253A%257B%2522type%2522%253A%2522PlainText%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522identity%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.product.f_sku_properties_3dr%255B%255D.name%2522%257D%257D%255D%22%3E%3C%2Fspan%3E%3Cspan%20class%3D%22span%22%3E%3A%20%3C%2Fspan%3E%3Cspan%20class%3D%22text-block-123%22%20data-wf-bindings%3D%22%255B%257B%2522innerHTML%2522%253A%257B%2522type%2522%253A%2522CommercePropValues%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522identity%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.product.f_sku_properties_3dr%255B%255D%2522%257D%257D%255D%22%3E%3C%2Fspan%3E%3C%2Fli%3E
                                </script>
                                <ul
                                  data-wf-bindings="%5B%7B%22optionSets%22%3A%7B%22type%22%3A%22CommercePropTable%22%2C%22filter%22%3A%7B%22type%22%3A%22identity%22%2C%22params%22%3A%5B%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.userItems%5B%5D.product.f_sku_properties_3dr[]%22%7D%7D%2C%7B%22optionValues%22%3A%7B%22type%22%3A%22CommercePropValues%22%2C%22filter%22%3A%7B%22type%22%3A%22identity%22%2C%22params%22%3A%5B%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.userItems%5B%5D.sku.f_sku_values_3dr%22%7D%7D%5D"
                                  class="w-commerce-commercecheckoutorderitemoptionlist option-list-3"
                                  data-wf-collection="database.commerceOrder.userItems%5B%5D.product.f_sku_properties_3dr"
                                  data-wf-template-id="wf-template-099c341c-a253-9c4d-bbe7-e511181ead9e"
                                >
                                  <li class="option-5">
                                    <span
                                      class="text-block-122"
                                      data-wf-bindings="%5B%7B%22innerHTML%22%3A%7B%22type%22%3A%22PlainText%22%2C%22filter%22%3A%7B%22type%22%3A%22identity%22%2C%22params%22%3A%5B%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.userItems%5B%5D.product.f_sku_properties_3dr%5B%5D.name%22%7D%7D%5D"
                                    ></span
                                    ><span class="span">: </span
                                    ><span
                                      class="text-block-123"
                                      data-wf-bindings="%5B%7B%22innerHTML%22%3A%7B%22type%22%3A%22CommercePropValues%22%2C%22filter%22%3A%7B%22type%22%3A%22identity%22%2C%22params%22%3A%5B%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.userItems%5B%5D.product.f_sku_properties_3dr%5B%5D%22%7D%7D%5D"
                                    ></span>
                                  </li>
                                </ul>
                              </div>
                            </div>
                            <div
                              id="w-node-_099c341c-a253-9c4d-bbe7-e511181eada4-dc7bbc40"
                              data-wf-bindings="%5B%7B%22innerHTML%22%3A%7B%22type%22%3A%22CommercePrice%22%2C%22filter%22%3A%7B%22type%22%3A%22price%22%2C%22params%22%3A%5B%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.userItems%5B%5D.rowTotal%22%7D%7D%5D"
                              class="product-price-copy-copy sans-margin"
                            >
                              $0.00
                            </div>
                            <div
                              id="w-node-_099c341c-a253-9c4d-bbe7-e511181ead9d-dc7bbc40"
                              data-wf-bindings="%5B%7B%22innerHTML%22%3A%7B%22type%22%3A%22Number%22%2C%22filter%22%3A%7B%22type%22%3A%22numberPrecision%22%2C%22params%22%3A%5B%220%22%2C%22numberPrecision%22%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.userItems%5B%5D.count%22%7D%7D%5D"
                              class="text-block-105"
                            >
                              1
                            </div>
                            <div
                              id="w-node-_7adea718-89d2-1a7b-fa8c-4456275321a6-dc7bbc40"
                              data-wf-bindings="%5B%7B%22innerHTML%22%3A%7B%22type%22%3A%22CommercePrice%22%2C%22filter%22%3A%7B%22type%22%3A%22price%22%2C%22params%22%3A%5B%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.userItems%5B%5D.price%22%7D%7D%5D"
                              class="product-price-copy-copy sans-margin"
                            >
                              $0.00
                            </div>
                          </div>
                        </div>
                      </fieldset>
                    </div>
                    <div class="div-block-153">
                      <div class="div-block-164">
                        <div class="bold-text-19">Total</div>
                        <div
                          data-wf-bindings="%5B%7B%22innerHTML%22%3A%7B%22type%22%3A%22CommercePrice%22%2C%22filter%22%3A%7B%22type%22%3A%22price%22%2C%22params%22%3A%5B%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.total%22%7D%7D%5D"
                          class="text-block-153"
                        ></div>
                      </div>
                      <div
                        id="w-node-_7da03e8d-81e4-ef56-32ce-9a0e13df955e-dc7bbc40"
                        class="div-block-164"
                      >
                        <div class="bold-text-19">Acompte  </div>
                        <div class="text-block-153">132 000 ar</div>
                      </div>
                      <div
                        id="w-node-_60998f11-035f-cf33-7feb-96953b154a92-dc7bbc40"
                        class="div-block-164"
                      >
                        <div class="bold-text-19">Reste à payer  </div>
                        <div class="text-block-153">198 000 Ar</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script
      src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=65e18c7f1e395b37dc7bbc49"
      type="text/javascript"
    ></script>
    <script
      src="https://assets-global.website-files.com/65e18c7f1e395b37dc7bbc49/js/webflow.877be787d.js"
      type="text/javascript"
    ></script>
    <script
      src="https://assets-global.website-files.com/65e18c7f1e395b37dc7bbc49%2F65708800710a99a2fe369cf8%2F660e4c665e01020f0e439221%2Fwebflowembed65e18c7f1e395b37dc7bbc49693-1.0.0.js"
      type="text/javascript"
    ></script>
    <script src="{{asset('assets/js2/jquery.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/js2/webflow-script.js')}}"
    type="text/javascript"></script>
    <script
    src="{{asset('assets/js2/65e18c7f1e395b37dc7bbc49-2f65708800710a99a2fe369cf8-2f660e4c665e01020f0e439221-2fwebflowembed65e18c7f1e395b37dc7bbc49693-1.0.0.js')}}"
      type="text/javascript"
    ></script>

  </body>
</html>

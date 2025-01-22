<!DOCTYPE html>
<html lang="en">


<head>
    <title>@yield('title')</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description"
        content="Gradient Able is trending dashboard template made using Bootstrap 5 design framework. Gradient Able is available in Bootstrap, React, CodeIgniter, Angular,  and .net Technologies.">
    <meta name="keywords"
        content="Bootstrap admin template, Dashboard UI Kit, Dashboard Template, Backend Panel, react dashboard, angular dashboard">
    <meta name="author" content="codedthemes">

    @if (isset(generalSettings()->favicon))
    <link rel="icon" href="{{ asset('storage/' . generalSettings()->favicon) }}" type="image/x-icon">
    @else
    <link rel="shortcut icon" href="{{ asset('web/favicon.svg') }}" type="image/x-icon">
    @endif

    {{-- datatable --}}
    <link rel="stylesheet" href="{{ asset('css/jquery.dataTables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/buttons.dataTables.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/plugins/jsvectormap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/css2.css') }}">

    <link rel="stylesheet" href="{{ asset('/fonts/tabler-icons.min.css') }}">

    <link rel="stylesheet" href="{{ asset('/fonts/feather.css') }}">

    <link rel="stylesheet" href="{{ asset('/fonts/fontawesome.css') }}">

    <link rel="stylesheet" href="{{ asset('/fonts/material.css') }}">

    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/style-preset.css') }}">

    <link rel="stylesheet" href="{{ asset('/assets/fonts/fontawesome/css/fontawesome-all.min.css') }}">

    <link rel="stylesheet" href="{{ asset('/assets/plugins/animation/css/animate.min.css') }}">

    <link rel="stylesheet" href="{{ asset('/assets/plugins/notification/css/notification.min.css') }}">


    <!-- <link rel="stylesheet" href="{{ asset('/assets/css/style.css') }}"> -->

    {{-- toaster --}}
    <link rel="stylesheet" href="{{ asset('/css/toastr.min.css') }}">
    {{-- CKEditor CDN --}}
    <script src="https://cdn.ckeditor.com/ckeditor5/35.0.1/classic/ckeditor.js"></script>
    
    <style>
        .highlight {
            background-color: yellow;
        }
        .table-responsive {
            margin-top: 20px;
        }
        .table {
            width: 100%;
            max-width: 100%;
            margin-bottom: 1rem;
            background-color: transparent;
        }
        .table th,
        .table td {
            padding: 0.75rem;
            vertical-align: top;
            border-top: 1px solid #dee2e6;
        }
        .table thead th {
            vertical-align: bottom;
            border-bottom: 2px solid #dee2e6;
        }
        .table tbody + tbody {
            border-top: 2px solid #dee2e6;
        }
        .table-bordered {
            border: 1px solid #dee2e6;
        }
        .table-bordered th,
        .table-bordered td {
            border: 1px solid #dee2e6;
        }
        .table-bordered thead th,
        .table-bordered thead td {
            border-bottom-width: 2px;
        }
    </style>
    <style>
        .bootstrap-tagsinput {
            background-color: #fff;
            border: 1px solid #ccc;
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
            display: inline-block;
            /* padding: 4px 6px; */
            color: #555;
            vertical-align: middle;
            /* border-radius: 4px; */
            max-width: 100%;
            /* line-height: 22px; */
            cursor: text;
        }

        .bootstrap-tagsinput input {
            border: none;
            box-shadow: none;
            outline: none;
            background-color: transparent;
            /* padding: 0 6px; */
            margin: 0;
            width: auto;
            max-width: 100%;
        }

        .bootstrap-tagsinput.form-control input::-moz-placeholder {
            color: #777;
            opacity: 1;
        }

        .bootstrap-tagsinput.form-control input:-ms-input-placeholder {
            color: #777;
        }

        .bootstrap-tagsinput.form-control input::-webkit-input-placeholder {
            color: #777;
        }

        .bootstrap-tagsinput input:focus {
            border: none;
            box-shadow: none;
        }

        .bootstrap-tagsinput .tag {
            margin-right: 2px;
            color: white;
        }

        .bootstrap-tagsinput .tag [data-role="remove"] {
            margin-left: 8px;
            cursor: pointer;
        }

        .bootstrap-tagsinput .tag [data-role="remove"]:after {
            content: "x";
            padding: 0px 2px;
        }

        .bootstrap-tagsinput .tag [data-role="remove"]:hover {
            box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
        }

        .bootstrap-tagsinput .tag [data-role="remove"]:hover:active {
            box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
        }
    </style>

    @stack('styles')
</head>

<body data-pc-header="header-1" data-pc-preset="preset-1" data-pc-sidebar-theme="light" data-pc-sidebar-caption="true"
    data-pc-direction="ltr" data-pc-theme="light">
    
@include('admin.partials.header')

<!-- universal search start -->
<div class="pc-container" style="display: none; min-height: 0 !important;">
    <div class="pc-content">
        <div class="row">
            <div id="search-results" class="col">
            </div>
        </div>
    </div>
</div>
<!-- universal search end -->

<!-- main content start -->
@yield('content')
<!-- main content end -->

<!-- @include('admin.partials.footer') -->


<script type="text/javascript" src="{{ asset('js/jquery-2.1.1.min.js') }}"></script>
<!--Data Table-->
<script type="text/javascript" src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/dataTables.buttons.min.js') }}"></script>


{{-- sweetalert --}}
<script src="{{ asset('js/sweetalert.min.js') }}"></script>
<script>
    document.querySelectorAll('.btnDelete').forEach(function (btn) {
        btn.addEventListener('click', function () {
            swal({
                title: "Are you sure?",
                text: "Once deleted, you will not be able to recover this!",
                icon: "warning",
                buttons: {
                    cancel: {
                        text: "Cancel",
                        value: null,
                        visible: true,
                        className: "btn btn-secondary"
                    },
                    confirm: {
                        text: "Delete",
                        value: true,
                        visible: true,
                        className: "btn btn-danger"
                    }
                },
                dangerMode: true
            }).then((willDelete) => {
                if (willDelete) {
                    this.closest('.deleteForm').submit();
                }
            });
        });
    });
</script>


{{-- datatable --}}
<script>
    $(document).ready(function () {
        $("#example").DataTable();
    });
</script>
{{-- backbutton --}}
<script>
    function goBack() {
        window.history.back();
    }
</script>

<script data-cfasync="false" src="{{ asset('/js/plugins/email-decode.min.js') }}"></script>
<script src="{{ asset('/js/plugins/apexcharts.min.js') }}" type="90f9e57eb6fda3c0ef534197-text/javascript"></script>
<script src="{{ asset('/js/plugins/jsvectormap.min.js') }}" type="90f9e57eb6fda3c0ef534197-text/javascript"></script>
<script src="{{ asset('/js/plugins/world.js') }}" type="90f9e57eb6fda3c0ef534197-text/javascript"></script>
<script src="{{ asset('/js/plugins/world-merc.js') }}" type="90f9e57eb6fda3c0ef534197-text/javascript"></script>
<script src="{{ asset('/js/pages/dashboard-sales.js') }}" type="90f9e57eb6fda3c0ef534197-text/javascript"></script>
<script src="{{ asset('/js/plugins/popper.min.js') }}" type="90f9e57eb6fda3c0ef534197-text/javascript"></script>
<script src="{{ asset('/js/plugins/bootstrap.min.js') }}" type="90f9e57eb6fda3c0ef534197-text/javascript"></script>
<script src="{{ asset('/js/plugins/simplebar.min.js') }}" type="90f9e57eb6fda3c0ef534197-text/javascript"></script>
<script src="{{ asset('/js/fonts/custom-font.js') }}" type="90f9e57eb6fda3c0ef534197-text/javascript"></script>
<script src="{{ asset('/js/pcoded.js') }}" type="90f9e57eb6fda3c0ef534197-text/javascript"></script>
<script src="{{ asset('/js/plugins/feather.min.js') }}" type="90f9e57eb6fda3c0ef534197-text/javascript"></script>
<script src="{{ asset('/js/plugins/rocket-loader.min.js') }}" data-cf-settings="90f9e57eb6fda3c0ef534197-|49" defer>
</script>

{{-- text editor --}}
{{-- <script src="https://cdn.ckeditor.com/4.20.2/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('content');
</script> --}}


<script src="{{ asset('/js/popper.min.js') }}"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
<script src="{{ asset('js/bootstrap.min.js') }}"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>


<!-- Toastr JS -->
<script src="{{ asset('js/toastr.min.js') }}"></script>
<script>
    toastr.options = {
        "closeButton": true,
        "progressBar": true,
        "timeOut": 5000,
        "extendedTimeOut": 1000,
        "positionClass": "toast-top-right",
        "preventDuplicates": true,
        "maxOpened": 3
    };

    @if (Session:: has('success'))
    toastr.success("{{ Session::get('success') }}");
    @elseif(Session:: has('error'))
    toastr.error("{{ Session::get('error') }}");
    @elseif(Session:: has('warning'))
    toastr.warning("{{ Session::get('warning') }}");
    @elseif(Session:: has('info'))
    toastr.info("{{ Session::get('info') }}");
    @endif
</script>

<script>
    $(document).ready(function() {
        $('#search-button').on('click', function(e) {
            e.preventDefault(); // Prevent the default form submission

            var query = $('#search-input').val();

            $.ajax({
                url: '{{ route('admin.search') }}', // Use route helper
                method: 'GET',
                data: {
                    query: query
                },
                success: function(response) {
                    var containerDiv = $('.pc-container');
                    var resultsDiv = $('#search-results');
                    resultsDiv.empty(); // Clear previous results

                    if (response.length === 0) {
                        containerDiv.hide(); // Hide the container div if no results
                        resultsDiv.append('<p>No results found</p>');
                    } else {
                        containerDiv.show(); // Show the container div if there are results

                        // Iterate over the response and append the results
                        response.forEach(function(result) {
                            var resultHtml = '<div style="margin-bottom: 30px;">';
                            resultHtml += '<h4>' + result.model + '</h4>'; // Model name
                            resultHtml += '<div class="table-responsive"><table class="table table-bordered"><tbody>';

                            for (var key in result) {
                                if (result.hasOwnProperty(key) && key !== 'model') {
                                    var value = result[key];

                                    // Highlight the search term
                                    var regex = new RegExp('(' + query + ')', 'gi');
                                    value = String(value).replace(regex, '<span style="background-color: yellow;">$1</span>');

                                    // Check if the key is 'photo', 'image' or any other image-related attribute
                                    if (key === 'photo' || key === 'image' || key.includes('photo') || key.includes('image')) {
                                        var imagePath = '{{ asset('storage') }}/' + result[key];
                                        resultHtml += '<tr><th class="text-uppercase">' + key + '</th><td><img src="' + imagePath + '" alt="' + result[key] + '" style="max-width: 100px;"></td></tr>';
                                    } else {
                                        resultHtml += '<tr><th class="text-uppercase">' + key + '</th><td>' + value + '</td></tr>';
                                    }
                                }
                            }

                            resultHtml += '</tbody></table></div></div>';
                            resultsDiv.append(resultHtml);
                        });
                    }
                },
                error: function(xhr) {
                    console.error(xhr);
                    alert('An error occurred while processing your request.');
                }
            });
        });
    });
</script>
<script>
    (function($) {
        "use strict";

        var defaultOptions = {
            tagClass: function(item) {
                return 'label label-info';
            },
            focusClass: 'focus',
            itemValue: function(item) {
                return item ? item.toString() : item;
            },
            itemText: function(item) {
                return this.itemValue(item);
            },
            itemTitle: function(item) {
                return null;
            },
            freeInput: true,
            addOnBlur: true,
            maxTags: undefined,
            maxChars: undefined,
            confirmKeys: [13, 44],
            delimiter: ',',
            delimiterRegex: null,
            pasteDelimeterForNewLine: ",",
            cancelConfirmKeysOnEmpty: false,
            onTagExists: function(item, $tag) {
                $tag.hide().fadeIn();
            },
            trimValue: false,
            allowDuplicates: false,
            triggerChange: true
        };

        /**
         * Constructor function
         */
        function TagsInput(element, options) {
            this.isInit = true;
            this.itemsArray = [];

            this.$element = $(element);
            this.$element.hide();

            this.isSelect = (element.tagName === 'SELECT');
            this.multiple = (this.isSelect && element.hasAttribute('multiple'));
            this.objectItems = options && options.itemValue;
            this.placeholderText = element.hasAttribute('placeholder') ? this.$element.attr('placeholder') : '';
            this.inputSize = Math.max(1, this.placeholderText.length);

            this.$container = $('<div class="bootstrap-tagsinput"></div>');
            this.$input = $('<input type="text" placeholder="' + this.placeholderText + '"/>').appendTo(this
                .$container);

            this.$element.before(this.$container);

            this.build(options);
            this.isInit = false;
        }

        TagsInput.prototype = {
            constructor: TagsInput,

            /**
             * Adds the given item as a new tag. Pass true to dontPushVal to prevent
             * updating the elements val()
             */
            add: function(item, dontPushVal, options) {
                var self = this;

                if (self.options.maxTags && self.itemsArray.length >= self.options.maxTags)
                    return;

                // Ignore falsey values, except false
                if (item !== false && !item)
                    return;

                // Trim value
                if (typeof item === "string" && self.options.trimValue) {
                    item = $.trim(item);
                }

                // Throw an error when trying to add an object while the itemValue option was not set
                if (typeof item === "object" && !self.objectItems)
                    throw ("Can't add objects when itemValue option is not set");

                // Ignore strings only containg whitespace
                if (item.toString().match(/^\s*$/))
                    return;

                // If SELECT but not multiple, remove current tag
                if (self.isSelect && !self.multiple && self.itemsArray.length > 0)
                    self.remove(self.itemsArray[0]);

                if (typeof item === "string" && this.$element[0].tagName === 'INPUT') {
                    var delimiter = (self.options.delimiterRegex) ? self.options.delimiterRegex : self
                        .options.delimiter;
                    var items = item.split(delimiter);
                    if (items.length > 1) {
                        for (var i = 0; i < items.length; i++) {
                            this.add(items[i], true);
                        }

                        if (!dontPushVal)
                            self.pushVal(self.options.triggerChange);
                        return;
                    }
                }

                var itemValue = self.options.itemValue(item),
                    itemText = self.options.itemText(item),
                    tagClass = self.options.tagClass(item),
                    itemTitle = self.options.itemTitle(item);

                // Ignore items allready added
                var existing = $.grep(self.itemsArray, function(item) {
                    return self.options.itemValue(item) === itemValue;
                })[0];
                if (existing && !self.options.allowDuplicates) {
                    // Invoke onTagExists
                    if (self.options.onTagExists) {
                        var $existingTag = $(".tag", self.$container).filter(function() {
                            return $(this).data("item") === existing;
                        });
                        self.options.onTagExists(item, $existingTag);
                    }
                    return;
                }

                // if length greater than limit
                if (self.items().toString().length + item.length + 1 > self.options.maxInputLength)
                    return;

                // raise beforeItemAdd arg
                var beforeItemAddEvent = $.Event('beforeItemAdd', {
                    item: item,
                    cancel: false,
                    options: options
                });
                self.$element.trigger(beforeItemAddEvent);
                if (beforeItemAddEvent.cancel)
                    return;

                // register item in internal array and map
                self.itemsArray.push(item);

                // add a tag element

                var $tag = $('<span class="tag ' + htmlEncode(tagClass) + (itemTitle !== null ? (
                        '" title="' + itemTitle) : '') + '">' + htmlEncode(itemText) +
                    '<span data-role="remove"></span></span>');
                $tag.data('item', item);
                self.findInputWrapper().before($tag);
                $tag.after(' ');

                // Check to see if the tag exists in its raw or uri-encoded form
                var optionExists = (
                    $('option[value="' + encodeURIComponent(itemValue) + '"]', self.$element).length ||
                    $('option[value="' + htmlEncode(itemValue) + '"]', self.$element).length
                );

                // add <option /> if item represents a value not present in one of the <select />'s options
                if (self.isSelect && !optionExists) {
                    var $option = $('<option selected>' + htmlEncode(itemText) + '</option>');
                    $option.data('item', item);
                    $option.attr('value', itemValue);
                    self.$element.append($option);
                }

                if (!dontPushVal)
                    self.pushVal(self.options.triggerChange);

                // Add class when reached maxTags
                if (self.options.maxTags === self.itemsArray.length || self.items().toString().length ===
                    self.options.maxInputLength)
                    self.$container.addClass('bootstrap-tagsinput-max');

                // If using typeahead, once the tag has been added, clear the typeahead value so it does not stick around in the input.
                if ($('.typeahead, .twitter-typeahead', self.$container).length) {
                    self.$input.typeahead('val', '');
                }

                if (this.isInit) {
                    self.$element.trigger($.Event('itemAddedOnInit', {
                        item: item,
                        options: options
                    }));
                } else {
                    self.$element.trigger($.Event('itemAdded', {
                        item: item,
                        options: options
                    }));
                }
            },

            /**
             * Removes the given item. Pass true to dontPushVal to prevent updating the
             * elements val()
             */
            remove: function(item, dontPushVal, options) {
                var self = this;

                if (self.objectItems) {
                    if (typeof item === "object")
                        item = $.grep(self.itemsArray, function(other) {
                            return self.options.itemValue(other) == self.options.itemValue(item);
                        });
                    else
                        item = $.grep(self.itemsArray, function(other) {
                            return self.options.itemValue(other) == item;
                        });

                    item = item[item.length - 1];
                }

                if (item) {
                    var beforeItemRemoveEvent = $.Event('beforeItemRemove', {
                        item: item,
                        cancel: false,
                        options: options
                    });
                    self.$element.trigger(beforeItemRemoveEvent);
                    if (beforeItemRemoveEvent.cancel)
                        return;

                    $('.tag', self.$container).filter(function() {
                        return $(this).data('item') === item;
                    }).remove();
                    $('option', self.$element).filter(function() {
                        return $(this).data('item') === item;
                    }).remove();
                    if ($.inArray(item, self.itemsArray) !== -1)
                        self.itemsArray.splice($.inArray(item, self.itemsArray), 1);
                }

                if (!dontPushVal)
                    self.pushVal(self.options.triggerChange);

                // Remove class when reached maxTags
                if (self.options.maxTags > self.itemsArray.length)
                    self.$container.removeClass('bootstrap-tagsinput-max');

                self.$element.trigger($.Event('itemRemoved', {
                    item: item,
                    options: options
                }));
            },

            /**
             * Removes all items
             */
            removeAll: function() {
                var self = this;

                $('.tag', self.$container).remove();
                $('option', self.$element).remove();

                while (self.itemsArray.length > 0)
                    self.itemsArray.pop();

                self.pushVal(self.options.triggerChange);
            },

            /**
             * Refreshes the tags so they match the text/value of their corresponding
             * item.
             */
            refresh: function() {
                var self = this;
                $('.tag', self.$container).each(function() {
                    var $tag = $(this),
                        item = $tag.data('item'),
                        itemValue = self.options.itemValue(item),
                        itemText = self.options.itemText(item),
                        tagClass = self.options.tagClass(item);

                    // Update tag's class and inner text
                    $tag.attr('class', null);
                    $tag.addClass('tag ' + htmlEncode(tagClass));
                    $tag.contents().filter(function() {
                        return this.nodeType == 3;
                    })[0].nodeValue = htmlEncode(itemText);

                    if (self.isSelect) {
                        var option = $('option', self.$element).filter(function() {
                            return $(this).data('item') === item;
                        });
                        option.attr('value', itemValue);
                    }
                });
            },

            /**
             * Returns the items added as tags
             */
            items: function() {
                return this.itemsArray;
            },

            /**
             * Assembly value by retrieving the value of each item, and set it on the
             * element.
             */
            pushVal: function() {
                var self = this,
                    val = $.map(self.items(), function(item) {
                        return self.options.itemValue(item).toString();
                    });

                self.$element.val(val, true);

                if (self.options.triggerChange)
                    self.$element.trigger('change');
            },

            /**
             * Initializes the tags input behaviour on the element
             */
            build: function(options) {
                var self = this;

                self.options = $.extend({}, defaultOptions, options);
                // When itemValue is set, freeInput should always be false
                if (self.objectItems)
                    self.options.freeInput = false;

                makeOptionItemFunction(self.options, 'itemValue');
                makeOptionItemFunction(self.options, 'itemText');
                makeOptionFunction(self.options, 'tagClass');

                // Typeahead Bootstrap version 2.3.2
                if (self.options.typeahead) {
                    var typeahead = self.options.typeahead || {};

                    makeOptionFunction(typeahead, 'source');

                    self.$input.typeahead($.extend({}, typeahead, {
                        source: function(query, process) {
                            function processItems(items) {
                                var texts = [];

                                for (var i = 0; i < items.length; i++) {
                                    var text = self.options.itemText(items[i]);
                                    map[text] = items[i];
                                    texts.push(text);
                                }
                                process(texts);
                            }

                            this.map = {};
                            var map = this.map,
                                data = typeahead.source(query);

                            if ($.isFunction(data.success)) {
                                // support for Angular callbacks
                                data.success(processItems);
                            } else if ($.isFunction(data.then)) {
                                // support for Angular promises
                                data.then(processItems);
                            } else {
                                // support for functions and jquery promises
                                $.when(data)
                                    .then(processItems);
                            }
                        },
                        updater: function(text) {
                            self.add(this.map[text]);
                            return this.map[text];
                        },
                        matcher: function(text) {
                            return (text.toLowerCase().indexOf(this.query.trim()
                                .toLowerCase()) !== -1);
                        },
                        sorter: function(texts) {
                            return texts.sort();
                        },
                        highlighter: function(text) {
                            var regex = new RegExp('(' + this.query + ')', 'gi');
                            return text.replace(regex, "<strong>$1</strong>");
                        }
                    }));
                }

                // typeahead.js
                if (self.options.typeaheadjs) {
                    // Determine if main configurations were passed or simply a dataset
                    var typeaheadjs = self.options.typeaheadjs;
                    if (!$.isArray(typeaheadjs)) {
                        typeaheadjs = [null, typeaheadjs];
                    }

                    $.fn.typeahead.apply(self.$input, typeaheadjs).on('typeahead:selected', $.proxy(
                        function(obj, datum, name) {
                            var index = 0;
                            typeaheadjs.some(function(dataset, _index) {
                                if (dataset.name === name) {
                                    index = _index;
                                    return true;
                                }
                                return false;
                            });

                            // @TODO Dep: https://github.com/corejavascript/typeahead.js/issues/89
                            if (typeaheadjs[index].valueKey) {
                                self.add(datum[typeaheadjs[index].valueKey]);
                            } else {
                                self.add(datum);
                            }

                            self.$input.typeahead('val', '');
                        }, self));
                }

                self.$container.on('click', $.proxy(function(event) {
                    if (!self.$element.attr('disabled')) {
                        self.$input.removeAttr('disabled');
                    }
                    self.$input.focus();
                }, self));

                if (self.options.addOnBlur && self.options.freeInput) {
                    self.$input.on('focusout', $.proxy(function(event) {
                        // HACK: only process on focusout when no typeahead opened, to
                        //       avoid adding the typeahead text as tag
                        if ($('.typeahead, .twitter-typeahead', self.$container).length === 0) {
                            self.add(self.$input.val());
                            self.$input.val('');
                        }
                    }, self));
                }

                // Toggle the 'focus' css class on the container when it has focus
                self.$container.on({
                    focusin: function() {
                        self.$container.addClass(self.options.focusClass);
                    },
                    focusout: function() {
                        self.$container.removeClass(self.options.focusClass);
                    },
                });

                /**
                 * Replace New Line Character with Delimeter Before further execution
                 */
                self.$input.on("paste", $.proxy(function(event) {
                    event.preventDefault();
                    self.$input.val((event.originalEvent || event).clipboardData.getData(
                        'text/plain').replaceAll("\n", self.options
                        .pasteDelimeterForNewLine));
                }, self));

                self.$container.on('keydown', 'input', $.proxy(function(event) {
                    var $input = $(event.target),
                        $inputWrapper = self.findInputWrapper();

                    if (self.$element.attr('disabled')) {
                        self.$input.attr('disabled', 'disabled');
                        return;
                    }

                    switch (event.which) {
                        // BACKSPACE
                        case 8:
                            if (doGetCaretPosition($input[0]) === 0) {
                                var prev = $inputWrapper.prev();
                                if (prev.length) {
                                    self.remove(prev.data('item'));
                                }
                            }
                            break;

                            // DELETE
                        case 46:
                            if (doGetCaretPosition($input[0]) === 0) {
                                var next = $inputWrapper.next();
                                if (next.length) {
                                    self.remove(next.data('item'));
                                }
                            }
                            break;

                            // LEFT ARROW
                        case 37:
                            // Try to move the input before the previous tag
                            var $prevTag = $inputWrapper.prev();
                            if ($input.val().length === 0 && $prevTag[0]) {
                                $prevTag.before($inputWrapper);
                                $input.focus();
                            }
                            break;
                            // RIGHT ARROW
                        case 39:
                            // Try to move the input after the next tag
                            var $nextTag = $inputWrapper.next();
                            if ($input.val().length === 0 && $nextTag[0]) {
                                $nextTag.after($inputWrapper);
                                $input.focus();
                            }
                            break;
                        default:
                            // ignore
                    }

                    // Reset internal input's size
                    var textLength = $input.val().length,
                        wordSpace = Math.ceil(textLength / 5),
                        size = textLength + wordSpace + 1;
                    $input.attr('size', Math.max(this.inputSize, $input.val().length));
                }, self));

                self.$container.on('keypress', 'input', $.proxy(function(event) {
                    var $input = $(event.target);

                    if (self.$element.attr('disabled')) {
                        self.$input.attr('disabled', 'disabled');
                        return;
                    }

                    var text = $input.val(),
                        maxLengthReached = self.options.maxChars && text.length >= self.options
                        .maxChars;
                    if (self.options.freeInput && (keyCombinationInList(event, self.options
                            .confirmKeys) || maxLengthReached)) {
                        // Only attempt to add a tag if there is data in the field
                        if (text.length !== 0) {
                            self.add(maxLengthReached ? text.substr(0, self.options.maxChars) :
                                text);
                            $input.val('');
                        }

                        // If the field is empty, let the event triggered fire as usual
                        if (self.options.cancelConfirmKeysOnEmpty === false) {
                            event.preventDefault();
                        }
                    }

                    // Reset internal input's size
                    var textLength = $input.val().length,
                        wordSpace = Math.ceil(textLength / 5),
                        size = textLength + wordSpace + 1;
                    $input.attr('size', Math.max(this.inputSize, $input.val().length));
                }, self));

                // Remove icon clicked
                self.$container.on('click', '[data-role=remove]', $.proxy(function(event) {
                    if (self.$element.attr('disabled')) {
                        return;
                    }
                    self.remove($(event.target).closest('.tag').data('item'));
                }, self));

                // Only add existing value as tags when using strings as tags
                if (self.options.itemValue === defaultOptions.itemValue) {
                    if (self.$element[0].tagName === 'INPUT') {
                        self.add(self.$element.val());
                    } else {
                        $('option', self.$element).each(function() {
                            self.add($(this).attr('value'), true);
                        });
                    }
                }
            },

            /**
             * Removes all tagsinput behaviour and unregsiter all event handlers
             */
            destroy: function() {
                var self = this;

                // Unbind events
                self.$container.off('keypress', 'input');
                self.$container.off('click', '[role=remove]');

                self.$container.remove();
                self.$element.removeData('tagsinput');
                self.$element.show();
            },

            /**
             * Sets focus on the tagsinput
             */
            focus: function() {
                this.$input.focus();
            },

            /**
             * Returns the internal input element
             */
            input: function() {
                return this.$input;
            },

            /**
             * Returns the element which is wrapped around the internal input. This
             * is normally the $container, but typeahead.js moves the $input element.
             */
            findInputWrapper: function() {
                var elt = this.$input[0],
                    container = this.$container[0];
                while (elt && elt.parentNode !== container)
                    elt = elt.parentNode;

                return $(elt);
            }
        };

        /**
         * Register JQuery plugin
         */
        $.fn.tagsinput = function(arg1, arg2, arg3) {
            var results = [];

            this.each(function() {
                var tagsinput = $(this).data('tagsinput');
                // Initialize a new tags input
                if (!tagsinput) {
                    tagsinput = new TagsInput(this, arg1);
                    $(this).data('tagsinput', tagsinput);
                    results.push(tagsinput);

                    if (this.tagName === 'SELECT') {
                        $('option', $(this)).attr('selected', 'selected');
                    }

                    // Init tags from $(this).val()
                    $(this).val($(this).val());
                } else if (!arg1 && !arg2) {
                    // tagsinput already exists
                    // no function, trying to init
                    results.push(tagsinput);
                } else if (tagsinput[arg1] !== undefined) {
                    // Invoke function on existing tags input
                    if (tagsinput[arg1].length === 3 && arg3 !== undefined) {
                        var retVal = tagsinput[arg1](arg2, null, arg3);
                    } else {
                        var retVal = tagsinput[arg1](arg2);
                    }
                    if (retVal !== undefined)
                        results.push(retVal);
                }
            });

            if (typeof arg1 == 'string') {
                // Return the results from the invoked function calls
                return results.length > 1 ? results : results[0];
            } else {
                return results;
            }
        };

        $.fn.tagsinput.Constructor = TagsInput;

        /**
         * Most options support both a string or number as well as a function as
         * option value. This function makes sure that the option with the given
         * key in the given options is wrapped in a function
         */
        function makeOptionItemFunction(options, key) {
            if (typeof options[key] !== 'function') {
                var propertyName = options[key];
                options[key] = function(item) {
                    return item[propertyName];
                };
            }
        }

        function makeOptionFunction(options, key) {
            if (typeof options[key] !== 'function') {
                var value = options[key];
                options[key] = function() {
                    return value;
                };
            }
        }
        /**
         * HtmlEncodes the given value
         */
        var htmlEncodeContainer = $('<div />');

        function htmlEncode(value) {
            if (value) {
                return htmlEncodeContainer.text(value).html();
            } else {
                return '';
            }
        }

        /**
         * Returns the position of the caret in the given input field
         * http://flightschool.acylt.com/devnotes/caret-position-woes/
         */
        function doGetCaretPosition(oField) {
            var iCaretPos = 0;
            if (document.selection) {
                oField.focus();
                var oSel = document.selection.createRange();
                oSel.moveStart('character', -oField.value.length);
                iCaretPos = oSel.text.length;
            } else if (oField.selectionStart || oField.selectionStart == '0') {
                iCaretPos = oField.selectionStart;
            }
            return (iCaretPos);
        }

        /**
         * Returns boolean indicates whether user has pressed an expected key combination.
         * @param object keyPressEvent: JavaScript event object, refer
         *     http://www.w3.org/TR/2003/WD-DOM-Level-3-Events-20030331/ecma-script-binding.html
         * @param object lookupList: expected key combinations, as in:
         *     [13, {which: 188, shiftKey: true}]
         */
        function keyCombinationInList(keyPressEvent, lookupList) {
            var found = false;
            $.each(lookupList, function(index, keyCombination) {
                if (typeof(keyCombination) === 'number' && keyPressEvent.which === keyCombination) {
                    found = true;
                    return false;
                }

                if (keyPressEvent.which === keyCombination.which) {
                    var alt = !keyCombination.hasOwnProperty('altKey') || keyPressEvent.altKey ===
                        keyCombination.altKey,
                        shift = !keyCombination.hasOwnProperty('shiftKey') || keyPressEvent.shiftKey ===
                        keyCombination.shiftKey,
                        ctrl = !keyCombination.hasOwnProperty('ctrlKey') || keyPressEvent.ctrlKey ===
                        keyCombination.ctrlKey;
                    if (alt && shift && ctrl) {
                        found = true;
                        return false;
                    }
                }
            });

            return found;
        }

        /**
         * Initialize tagsinput behaviour on inputs and selects which have
         * data-role=tagsinput
         */
        $(function() {
            $("input[data-role=tagsinput], select[multiple][data-role=tagsinput]").tagsinput();
        });
    })(window.jQuery);
</script>

@stack('scripts')
</body>

</html>
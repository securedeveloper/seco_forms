/* 
 * @author : Afzal Ahmad
 * @email : securedeveloper@gmail.com
 * @date-created : 27 January, 2016
 * @tracking-code : securedeveloper.scripts.secoforms
 * @registered-using : github-core-development
 */

(function ($) {
    $.fn.inlineStyle = function (prop) {
        var styles = this.attr("style"),
                value;
        styles && styles.split(";").forEach(function (e) {
            var style = e.split(":");
            if ($.trim(style[0]) === prop) {
                value = style[1];
            }
        });
        return value;
    };
}(jQuery));

var SECOFORMS = function (location) {
    this.currentElement = null;
    this.previousElement = null;
    this.delBtn = null;
    this.cloneBtn = null;
    this.ptable = null;
    this.option2 = null;
    this.optionsDiv = null;
    this.location = location;
    this.options = {text_input: "text_input", text_prepend: "prepend_text", text_appended: "appended_text", checkbox_prepend: "prepend_checkbox", checkbox_appended: "append_checkbox", text_area: "text_area", date: "date", submit: "submit", multiple_radio: "multiple_radio", multiple_checkbox: "multiple_checkbox", select_basic: "select_basic"};
    this.firstCol = null;
    this.secondCol = null;
    this.parentCol = null;
    this.type = null;
};

SECOFORMS.prototype.populateValues = function (self) {
    //var opArr = ["#secoFormPropertyId", "#secoFormPropertyLabel", "#secoFormPropertyPlaceholder", "#secoFormPropertyWidth", "#secoFormPropertyHeight", "#secoFormPropertyValue", "#secoFormPropertyIsRequired", "#secoFormPropertyReadOnly", "#secoFormPropertySpacing"];
    //var options = ["text_input", "prepend_text", "appended_text", "prepend_checkbox", "append_checkbox", "text_area", "date", "submit", "multiple_radio", "multiple_checkbox", "select_basic"];
    this.parentCol = this.currentElement.find(".form-group");
    this.type = this.parentCol.attr("data-name");
    this.firstCol = this.parentCol.find('.col-sm-3');
    this.secondCol = this.parentCol.find('.col-sm-9');
    if (this.type + "" === this.options.text_input + "")
        this.populateValuesTextInput(this);
    $('#hashwork').val(this.type);
};

SECOFORMS.prototype.getSpacingDropDown = function (selected) {
    var selectList = document.createElement("select");
    var soptions = ["Fill entire row(12 Columns)", "Use 11 columns", "Use 10 columns", "Use 9 columns", "Use 8 columns", "Use 7 columns", "Use 6 columns", "Use 5 columns", "Use 4 columns", "Use 3 columns", "Use 2 columns", "Use 1 column"];
    var svalues = ["col-sm-12", "col-sm-11", "col-sm-10", "col-sm-9", "col-sm-8", "col-sm-7", "col-sm-6", "col-sm-5", "col-sm-4", "col-sm-3", "col-sm-2", "col-sm-1"];
    for (var i = 0; i < svalues.length; i++) {
        var option = document.createElement('option');
        option.value = svalues[i];
        option.text = soptions[i];
        option.selected = svalues + "" === selected + "";
        selectList.appendChild(option);
    }
    return selectList;
};

SECOFORMS.prototype.getSpacingClass = function () {
    var clss = this.parentCol.attr('class').split(' ');
    var cls = '';
    for (var cli = 0; cli < clss.length; cli++) {
        var clNm = clss[cli] + "";
        if (clNm.indexOf("col-") !== -1)
            cls = clNm;
    }
    return cls;
};

SECOFORMS.prototype.populateValuesTextInput = function (self) {
    var table = document.createElement('div');
    table.className = "col-sm-12";
    //Label Controller
    var row01 = document.createElement('div');
    row01.className = "col-sm-12 form-group";
    var col11 = document.createElement('label');
    col11.className = "col-sm-3";
    col11.innerHTML = "Label";
    var col12 = document.createElement('div');
    col12.className = "col-sm-9";
    var labelHandler = document.createElement('input');
    labelHandler.type = 'text';
    labelHandler.className = "form-control";
    labelHandler.value = this.firstCol.find('label').html();
    labelHandler.maxLength = 50;
    labelHandler.oninput = function () {
        self.firstCol.find('label').html(this.value);
    };
    col12.appendChild(labelHandler);
    row01.appendChild(col11);
    row01.appendChild(col12);
    table.appendChild(row01);
    //ID Controller
    var row02 = document.createElement("div");
    row02.className = "col-sm-12 form-group";
    var col21 = document.createElement('label');
    col21.className = "col-sm-3";
    col21.innerHTML = "Id";
    var col22 = document.createElement('div');
    col22.className = "col-sm-9";
    var idHandler = document.createElement('input');
    idHandler.type = 'text';
    idHandler.className = "form-control";
    idHandler.value = this.secondCol.find('input').attr('id');
    idHandler.maxLength = 50;
    idHandler.oninput = function () {
        self.firstCol.find('label').attr('for', this.value);
        self.secondCol.find('input').attr('id', this.value);
        self.secondCol.find('input').attr('name', this.value);
    };
    col22.appendChild(idHandler);
    row02.appendChild(col21);
    row02.appendChild(col22);
    table.appendChild(row02);
    //Placeholder Handler
    var row03 = document.createElement("div");
    row03.className = "col-sm-12 form-group";
    var col31 = document.createElement('label');
    col31.className = "col-sm-3";
    col31.innerHTML = "Placeholder";
    var col32 = document.createElement('div');
    col32.className = "col-sm-9";
    var placeholderHandler = document.createElement('input');
    placeholderHandler.type = 'text';
    placeholderHandler.className = "form-control";
    placeholderHandler.value = this.secondCol.find('input').attr('placeholder');
    placeholderHandler.maxLength = 50;
    placeholderHandler.oninput = function () {
        self.secondCol.find('input').attr('placeholder', this.value);
    };
    col32.appendChild(placeholderHandler);
    row03.appendChild(col31);
    row03.appendChild(col32);
    table.appendChild(row03);

    //Width Handler
    var row04 = document.createElement("div");
    row04.className = "col-sm-12 form-group";
    var col41 = document.createElement('label');
    col41.className = "col-sm-3";
    col41.innerHTML = "Width";
    var col42 = document.createElement('div');
    col42.className = "col-sm-9";
    var widthHandler = document.createElement('input');
    widthHandler.className = "form-control";
    var width = parseInt(self.secondCol.find('input').inlineStyle("width"));
    if (!isNaN(width)) {
        widthHandler.value = width;
    }
    widthHandler.maxLength = 4;
    widthHandler.type = "number";
    widthHandler.placeholder = "Default";
    widthHandler.oninput = function () {
        self.secondCol.find('input').width(this.value);
    };
    col42.appendChild(widthHandler);
    row04.appendChild(col41);
    row04.appendChild(col42);
    table.appendChild(row04);


    //Value Handler
    var row05 = document.createElement("div");
    row05.className = "col-sm-12 form-group";
    var col51 = document.createElement('label');
    col51.className = "col-sm-3";
    col51.innerHTML = "Value";
    var col52 = document.createElement('div');
    col52.className = "col-sm-9";
    var valueHandler = document.createElement('input');
    valueHandler.className = "form-control";
    valueHandler.value = self.secondCol.find('input').val();
    valueHandler.maxLength = 50;
    valueHandler.type = "text";
    valueHandler.placeholder = "Default";
    valueHandler.oninput = function () {
        self.secondCol.find('input').val(this.value);
    };
    col52.appendChild(valueHandler);
    row05.appendChild(col51);
    row05.appendChild(col52);
    table.appendChild(row05);

    //Required Handler
    var row06 = document.createElement("div");
    row06.className = "col-sm-12 form-group";
    var col61 = document.createElement('label');
    col61.className = "col-sm-3";
    col61.innerHTML = "Required";
    var col62 = document.createElement('div');
    col62.className = "col-sm-9";
    var requiredHandler = document.createElement('input');
    //requiredHandler.className = "form-control";
    requiredHandler.type = "checkbox";
    if (self.secondCol.find('input').attr('required') !== 'undefined') {
        requiredHandler.checked = true;
    }
    requiredHandler.onchange = function () {
        if (this.checked) {
            self.firstCol.find('label').css("style", "content:'*';color: red;");
            self.secondCol.find('input').attr('required', 'required');
        } else {
            self.firstCol.find('label::after').css("style", "content:'';color: red;");
            self.secondCol.find('input').removeAttr('required');
        }
    };
    col62.appendChild(requiredHandler);
    row06.appendChild(col61);
    row06.appendChild(col62);
    table.appendChild(row06);

    //ReadOnly Handler
    var row07 = document.createElement("div");
    row07.className = "col-sm-12 form-group";
    var col71 = document.createElement('label');
    col71.className = "col-sm-3";
    col71.innerHTML = "Read Only";
    var col72 = document.createElement('div');
    col72.className = "col-sm-9";
    var readonlyHandler = document.createElement('input');
    //readonlyHandler.className = "form-control";
    readonlyHandler.type = "checkbox";
    if (self.secondCol.find('input').attr('readonly') !== 'undefined') {
        readonlyHandler.checked = true;
    }
    readonlyHandler.onchange = function () {
        if (this.checked) {
            self.secondCol.find('input').attr('readonly', 'readonly');
        } else {
            self.secondCol.find('input').removeAttr('readonly');
        }
    };
    col72.appendChild(readonlyHandler);
    row07.appendChild(col71);
    row07.appendChild(col72);
    table.appendChild(row07);

    //Value Handler
    var row08 = document.createElement("div");
    row08.className = "col-sm-12 form-group";
    var col81 = document.createElement('label');
    col81.className = "col-sm-3";
    col81.innerHTML = "Custom CSS";
    var col82 = document.createElement('div');
    col82.className = "col-sm-9";
    var customCSSHandler = document.createElement('input');
    customCSSHandler.className = "form-control";
    customCSSHandler.value = self.secondCol.find('input').attr('style') !== 'undefined' ? self.secondCol.find('input').attr('style') : '';
    customCSSHandler.type = "text";
    customCSSHandler.placeholder = "Default";
    customCSSHandler.oninput = function () {
        if (this.value.length > 1)
            self.secondCol.attr('style', this.value);
    };
    col82.appendChild(customCSSHandler);
    row08.appendChild(col81);
    row08.appendChild(col82);
    table.appendChild(row08);

    //Spacing Handler
    var row09 = document.createElement("div");
    row09.className = "col-sm-12 form-group";
    var col91 = document.createElement('label');
    col91.className = "col-sm-3";
    col91.innerHTML = "Spacing";
    var col92 = document.createElement('div');
    col92.className = "col-sm-9";
    var cls = this.getSpacingClass();
    var spacingHandler = this.getSpacingDropDown(cls);
    spacingHandler.className = "form-control";
    spacingHandler.onchange = function () {
        self.parentCol.removeClass(cls);
        self.parentCol.addClass(this.value);
    };
    col92.appendChild(spacingHandler);
    row09.appendChild(col91);
    row09.appendChild(col92);
    table.appendChild(row09);

    //END now append table
    this.ptable.append(table);
};

SECOFORMS.prototype.removeElementOptions = function (self) {
    if (self.previousElement !== null && self.optionsDiv !== null) {
        $('#' + self.optionsDiv.id).remove();
        self.previousElement.removeAttr('style');
    }
};
SECOFORMS.prototype.getRandomID = function () {
    var rand1 = new Date().getTime();
    var rand2 = Math.floor((Math.random() * 10000) + 1);
    return rand1 + '' + rand2;
};
SECOFORMS.prototype.cloneElement = function (self, html) {
    self.appendElement(html);
};
SECOFORMS.prototype.removeElement = function (self) {
    self.currentElement.remove();
    self.currentElement = null;
};
SECOFORMS.prototype.appendElement = function (html) {
    $("<div class='draggedelement'></div>").html(html).appendTo('#target').insertBefore('.last');

};
SECOFORMS.prototype.produceElementOptions = function (self) {
    if (self.currentElement !== null) {
        self.optionsDiv = document.createElement("div");
        self.optionsDiv.id = "opt" + self.getRandomID();
        self.optionsDiv.className = "col-sm-12";
        var reg = document.createElement("div");
        reg.className = "col-sm-offset-8 col-sm-4 text-right";
        self.delBtn = document.createElement('img');
        self.delBtn.src = self.location + "/images/delete.png";
        self.delBtn.style.width = "20px";
        self.delBtn.style.height = "20px";
        self.delBtn.style.margin = "5px";
        self.delBtn.style.cursor = "pointer";
        self.delBtn.onclick = function () {
            if (window.confirm('Are you sure you want to delete this control?')) {
                self.removeElement(self);
            }
        };
        self.cloneBtn = document.createElement('img');
        self.cloneBtn.src = self.location + "images/clone.png";
        self.cloneBtn.style.width = "20px";
        self.cloneBtn.style.height = "20px";
        self.cloneBtn.style.margin = "5px";
        self.cloneBtn.style.cursor = "pointer";
        var html = self.currentElement.html();
        self.cloneBtn.onclick = function () {
            self.cloneElement(self, html);
        };
        reg.appendChild(self.delBtn);
        reg.appendChild(self.cloneBtn);
        self.optionsDiv.appendChild(reg);
        self.currentElement.prepend(self.optionsDiv);
        self.currentElement.attr('style', 'background:#F3FFFF !important;');
    }
};

SECOFORMS.prototype.initialize = function (self) {
    window.SECOFORMS.object = self;
    $(function () {
        $('body').on('click', 'div.draggedelement', function () {
            self = window.SECOFORMS.object;
            self.previousElement = self.currentElement;
            self.currentElement = $(this);
            $(this).find('input').keydown(function (e) {
                e.preventDefault();
                return false;
            });
            self.ptable = $('#secoFormPropertiesTable');
            self.ptable.css("display", "block");
            self.ptable.html("");
            self.option2 = $('#secoFormOption2');
            self.option2.click();
            self.removeElementOptions(self);
            self.produceElementOptions(self);
            self.populateValues(self);
        });
        $("#seco_tools_catalog").accordion();
        $(".component").draggable({
            opacity: 1,
            helper: "clone",
            zIndex: 10000,
            appendTo: "body",
            revert: true,
            revertDuration: 200,
            cursorAt: {left: 0, top: 0}
        });
        $("#target").droppable({
            accept: '.component',
            activeClass: "ui-state-default",
            hoverClass: "ui-state-hover",
            drop: function (event, ui) {
                self.appendElement(ui.draggable.html());
            }
        });
        $('#target div').sortable({items: '> div:not(.last)'});
    });
};
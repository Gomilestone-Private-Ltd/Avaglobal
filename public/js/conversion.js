//
// --- JAVASCRIPT UNIT CONVERTER

// If you study this file, you'll see that all the important data (namely, unit names and conversion factors) are explicitly defined as JavaScript arrays under the "Global Variable & Data Definitions" heading (which should be right under these comments).

// This is done, because: a) I figured it's the fastest way to do it, and b) it keeps everything in one file, making local storage and usage a snap.

// If you wanna mess with these array definitions, keep in mind the following (better study the definitions first before you read this; otherwise skip it altogether):

// 1) The unit[i][j] and factor[i][j] arrays should have the same j-length and their elements should correspond to each other in the j dimension; i.e. unit[0][2] should define the name and factor[0][2] the conversion factor of the SAME unit.  Duh!...

// 2) In every property (i.e. the i-dimension of the unit and factor arrays) there should be defined a 'primary' or 'base' unit, i.e. one with a conversion factor of 1.  The definitions of the other (secondary) units should use this formula:

// 1 [Secondary unit] = [Secondary unit conversion factor] [Primary Unit]
//                                   ^
//  This goes in the factor array ___|
//
//  e.g.: 1 ft = 0.3048 m

// ====================================
//  Global Variable & Data Definitions
// ====================================
var property = new Array();
var unit = new Array();
var factor = new Array();

property[0] = "Length";
unit[0] = new Array(
    "Meter (m)",

    "Centimeter (cm)",
    "Kilometer (km)",

    "Foot (ft)",
    "Inch (in)",

    "Millimeter (mm)"
);
factor[0] = new Array(1, 0.01, 1000, 0.3048, 0.0254, 0.001);

property[1] = "Weight";
unit[1] = new Array(
    "Kilogram (kgr)",

    "Pound mass (lbm)",
    "Pound mass (troy)"
);
factor[1] = new Array(
    1,

    0.4535924,
    0.3732417
);

// !!! Caution: Temperature requires an increment as well as a multiplying factor
// !!! and that's why it's handled differently
// !!! Be VERY careful in how you change this behavior
property[2] = "Temperature";
unit[2] = new Array(
    "Degrees Celsius ('C)",
    "Degrees Fahrenheit ('F)",
    "Degrees Kelvin ('K)",
    "Degrees Rankine ('R)"
);
factor[2] = new Array(1, 0.555555555555, 1, 0.555555555555);
tempIncrement = new Array(0, -32, -273.15, -491.67);

property[3] = "Volume & Capacity";
unit[3] = new Array(
    "Cubic Meter (m^3)",

    "Cubic foot"
);
factor[3] = new Array(
    1,

    0.02831685
);

// ===========
//  Functions
// ===========

function UpdateUnitMenu(propMenu, unitMenu) {
    // Updates the units displayed in the unitMenu according to the selection of property in the propMenu.
    var i;
    i = propMenu.selectedIndex;
    FillMenuWithArray(unitMenu, unit[i]);
}

function FillMenuWithArray(myMenu, myArray) {
    // Fills the options of myMenu with the elements of myArray.
    // !CAUTION!: It replaces the elements, so old ones will be deleted.
    var i;
    myMenu.length = myArray.length;
    for (i = 0; i < myArray.length; i++) {
        myMenu.options[i].text = myArray[i];
    }
}

function CalculateUnit(sourceForm, targetForm) {
    // A simple wrapper function to validate input before making the conversion
    var sourceValue = sourceForm.unit_input.value;

    // First check if the user has given numbers or anything that can be made to one...
    sourceValue = parseFloat(sourceValue);
    if (!isNaN(sourceValue) || sourceValue == 0) {
        // If we can make a valid floating-point number, put it in the text box and convert!
        sourceForm.unit_input.value = sourceValue;
        ConvertFromTo(sourceForm, targetForm);
    }
}

function ConvertFromTo(sourceForm, targetForm) {
    // Converts the contents of the sourceForm input box to the units specified in the targetForm unit menu and puts the result in the targetForm input box.In other words, this is the heart of the whole script...
    var propIndex;
    var sourceIndex;
    var sourceFactor;
    var targetIndex;
    var targetFactor;
    var result;

    // Start by checking which property we are working in...
    propIndex = document.property_form.the_menu.selectedIndex;

    // Let's determine what unit are we converting FROM (i.e. source) and the factor needed to convert that unit to the base unit.
    sourceIndex = sourceForm.unit_menu.selectedIndex;
    sourceFactor = factor[propIndex][sourceIndex];

    // Cool! Let's do the same thing for the target unit - the units we are converting TO:
    targetIndex = targetForm.unit_menu.selectedIndex;
    targetFactor = factor[propIndex][targetIndex];
   

    // Simple, huh? let's do the math: a) convert the source TO the base unit: (The input has been checked by the CalculateUnit function).

    result = sourceForm.unit_input.value;
    // Handle Temperature increments!
    if (property[propIndex] == "Temperature") {
        result = parseFloat(result) + tempIncrement[sourceIndex];
    }
    result = result * sourceFactor;

    // not done yet... now, b) use the targetFactor to convert FROM the base unit
    // to the target unit...
    result = result / targetFactor;
    // Again, handle Temperature increments!
    if (property[propIndex] == "Temperature") {
        result = parseFloat(result) - tempIncrement[targetIndex];
    }

    // Ta-da! All that's left is to update the target input box:
    targetForm.unit_input.value = result.toFixed(4);

}

// This fragment initializes the property dropdown menu using the data defined above in the 'Data Definitions' section
window.onload = function (e) {
    FillMenuWithArray(document.property_form.the_menu, property);
    UpdateUnitMenu(document.property_form.the_menu, document.form_A.unit_menu);
    UpdateUnitMenu(document.property_form.the_menu, document.form_B.unit_menu);
};

// Restricting textboxes to accept numbers + navigational keys only
document
    .getElementByClass("numbersonly")
    .addEventListener("keydown", function (e) {
        var key = e.keyCode ? e.keyCode : e.which;

        if (
            !(
                (
                    [8, 9, 13, 27, 46, 110, 190].indexOf(key) !== -1 ||
                    (key == 65 && (e.ctrlKey || e.metaKey)) || // Select All
                    (key == 67 && (e.ctrlKey || e.metaKey)) || // Copy
                    (key == 86 && (e.ctrlKey || e.metaKey)) || // Paste
                    (key >= 35 && key <= 40) || // End, Home, Arrows
                    (key >= 48 && key <= 57 && !(e.shiftKey || e.altKey)) || // Numeric Keys
                    (key >= 96 && key <= 105)(
                        // Numpad
                        key == 190
                    )
                ) // Numpad
            )
        )
            e.preventDefault();
    });

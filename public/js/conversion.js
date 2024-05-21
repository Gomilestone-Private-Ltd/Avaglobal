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

// property[0] = "Length";
// unit[0] = new Array(
//     "Meter (m)",

//     "Centimeter (cm)",
//     "Kilometer (km)",

//     "Foot (ft)",
//     "Inch (in)",

//     "Millimeter (mm)"
// );
// factor[0] = new Array(1, 0.01, 1000, 0.3048, 0.0254, 0.001);
property[0] = "Length";
unit[0] = new Array(
    "Meter (m)",
    "Angstrom (A')",
    "Astronomical unit (AU)",
    "Caliber (cal)",
    "Centimeter (cm)",
    "Kilometer (km)",
    "Ell",
    "Em",
    "Fathom",
    "Furlong",
    "Fermi (fm)",
    "Foot (ft)",
    "Inch (in)",
    "League (int'l)",
    "League (UK)",
    "Light year (LY)",
    "Micrometer (mu-m)",
    "Mil",
    "Millimeter (mm)",
    "Nanometer (nm)",
    "Mile (int'l nautical)",
    "Mile (UK nautical)",
    "Mile (US nautical)",
    "Mile (US statute)",
    "Parsec",
    "Pica (printer)",
    "Picometer (pm)",
    "Point (pt)",
    "Rod",
    "Yard (yd)"
);
factor[0] = new Array(
    1,
    1e-10,
    1.49598e11,
    0.000254,
    0.01,
    1000,
    1.143,
    4.2323e-3,
    1.8288,
    201.168,
    1e-15,
    0.3048,
    0.0254,
    5556,
    5556,
    9.46055e15,
    0.000001,
    0.0000254,
    0.001,
    1e-9,
    1852,
    1853.184,
    1852,
    1609.344,
    3.08374e16,
    4.217518e-3,
    1e-12,
    0.0003514598,
    5.0292,
    0.9144
);

// property[1] = "Weight";
// unit[1] = new Array(
//     "Kilogram (kgr)",

//     "Pound mass (lbm)",
//     "Pound mass (troy)"
// );
// factor[1] = new Array(
//     1,

//     0.4535924,
//     0.3732417
// );
property[1] = "Weight";
unit[1] = new Array(
    "Kilogram (kgr)",
    "Gram (gr)",
    "Milligram (mgr)",
    "Microgram (mu-gr)",
    "Carat (metric)(ct)",
    "Hundredweight (long)",
    "Hundredweight (short)",
    "Pound mass (lbm)",
    "Pound mass (troy)",
    "Ounce mass (ozm)",
    "Ounce mass (troy)",
    "Slug",
    "Ton (assay)",
    "Ton (long)",
    "Ton (short)",
    "Ton (metric)",
    "Tonne"
);
factor[1] = new Array(
    1,
    0.001,
    1e-6,
    0.000000001,
    0.0002,
    50.80235,
    45.35924,
    0.4535924,
    0.3732417,
    0.02834952,
    0.03110348,
    14.5939,
    0.02916667,
    1016.047,
    907.1847,
    1000,
    1000
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

// property[3] = "Volume & Capacity";
// unit[3] = new Array(
//     "Cubic Meter (m^3)",

//     "Cubic foot"
// );
// factor[3] = new Array(
//     1,

//     0.02831685
// );
property[3] = "Volume & Capacity";
unit[3] = new Array(
    "Cubic Meter (m^3)",
    "Cubic centimeter",
    "Cubic millimeter",
    "Acre-foot",
    "Barrel (oil)",
    "Board foot",
    "Bushel (US)",
    "Cup",
    "Fluid ounce (US)",
    "Cubic foot",
    "Gallon (UK)",
    "Gallon (US,dry)",
    "Gallon (US,liq)",
    "Gill (UK)",
    "Gill (US)",
    "Cubic inch (in^3)",
    "Liter (new)",
    "Liter (old)",
    "Ounce (UK,fluid)",
    "Ounce (US,fluid)",
    "Peck (US)",
    "Pint (US,dry)",
    "Pint (US,liq)",
    "Quart (US,dry)",
    "Quart (US,liq)",
    "Stere",
    "Tablespoon",
    "Teaspoon",
    "Ton (register)",
    "Cubic yard"
);
factor[3] = new Array(
    1,
    0.000001,
    0.000000001,
    1233.482,
    0.1589873,
    0.002359737,
    0.03523907,
    0.0002365882,
    0.00002957353,
    0.02831685,
    0.004546087,
    0.004404884,
    0.003785412,
    0.0001420652,
    0.0001182941,
    0.00001638706,
    0.001,
    0.001000028,
    0.00002841305,
    0.00002957353,
    8.809768e-3,
    0.0005506105,
    4.731765e-4,
    0.001101221,
    9.46353e-4,
    1,
    0.00001478676,
    0.000004928922,
    2.831685,
    0.7645549
);

// ===========
//  Functions
// ===========

function UpdateUnitMenu(propMenu, unitMenu) {
    // Updates the units displayed in the unitMenu according to the selection of property in the propMenu.
    document.getElementById("form2").reset();
    document.getElementById("form3").reset();
    var i;
    i = propMenu.selectedIndex;
    FillMenuWithArray(unitMenu, unit[i]);
}

function FillMenuWithArray(myMenu, myArray) {
    document.getElementById("form2").reset();
    document.getElementById("form3").reset();
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

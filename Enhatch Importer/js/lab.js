// var mealSelectionElement = document.getElementById("meal-dropdown");
// var citySelectionElement = document.getElementById("city-dropdown");
  
// if (mealSelectionElement) {
//     mealSelectionElement.addEventListener("change", updateSelection);
//     citySelectionElement.addEventListener("change", updateSelection);


//     function updateSelection() {
//       var outputTextElement = document.getElementById("my-sentence");

//       var mealText = mealSelectionElement.options[mealSelectionElement.selectedIndex].innerHTML;
//       var cityText = citySelectionElement.options[citySelectionElement.selectedIndex].innerHTML;

//         if (!mealText  && cityText )        {
//             outputTextElement.textContent = "I am eating in " + cityText + ", but I don't know when."; 
//         }
//         else if (mealText  && !cityText)    {
//             outputTextElement.textContent = "I am eating " + mealText + ", but I don't know where."; 
//         }
//         else if (mealText  && cityText )    { 
//             outputTextElement.textContent = "I am eating " + mealText + " in " + cityText + "."; 
//         }
//         else {
//             outputTextElement.textContent = "I have no clue what I'm doing."
//         }
//     };
// };

    var companyValidationText = document.getElementById("company-validation"); 
    var importNameValidationText = document.getElementById("import-name-validation"); 
    var newImportNextButton = document.getElementById("new-import-next");
    var importNameInput  = document.getElementById("import-name");    


if (companyValidationText) {
    newImportNextButton.addEventListener("click", validateNewImportPage);
    companyInput.addEventListener("input", updateValidationTextCompany);
    importNameInput.addEventListener("input", updateValidationTextImportName);

    function validateNewImportPage() {
        if (companyInput.value.length > 1 && importNameInput.value.length >1) {
            newImportNextButton.href = "/productCategory.php";
            console.log("link ok ");
        } else if (!companyInput || !importNameInput) {
            newImportNextButton.href = "#";
                        console.log("link disabled ");
        }
        if (!companyInput.value) {
            companyValidationText.textContent = "Required";
            console.log(companyInput.value);
        }
        if (!importNameInput.value) {
            importNameValidationText.textContent = "Required";
        } ;
    };
    function updateValidationTextCompany() {
        if (!companyInput.value) {
            companyValidationText.textContent = "Required";
            console.log(1);
            console.log(companyInput.value);
        } else if  (companyInput.value.length >1) {
            companyValidationText.textContent = "";
            console.log(companyInput.value);
        };
    };

    function updateValidationTextImportName() {
        if (!importNameInput.value) {
            importNameValidationText.textContent = "Required";
            console.log(importNameInput.value);
            console.log(3);
        } else if (importNameInput.value.length >1) {
            importNameValidationText.textContent = "";
            console.log(importNameInput.value);
            console.log(4);
        };
    };
};
 
   // ----- Mapping page ---- 
    var formElement = document.getElementById("mapping-form")
    // var question1Element = document.getElementById("1");
    // var question2Element = document.getElementById("2");
    // var question3Element = document.getElementById("3");
    // var question4Element = document.getElementById("4");
    // var question5Element = document.getElementById("5");
    // var question6Element = document.getElementById("6");


if (formElement) {  
       formElement.addEventListener("change", updateMappedFields);
    // question1Element.addEventListener("change", updateMappedFields);
    // question2Element.addEventListener("change", updateMappedFields);
    // question3Element.addEventListener("change", updateMappedFields);
    // question4Element.addEventListener("change", updateMappedFields);
    // question5Element.addEventListener("change", updateMappedFields);
    // question6Element.addEventListener("change", updateMappedFields);

    function updateMappedFields() {
      // var mappingRight1 = document.getElementById("mapping-right-1");
      // var mappingRight2 = document.getElementById("mapping-right-2");
      // var mappingRight3 = document.getElementById("mapping-right-3");
      // var mappingRight4 = document.getElementById("mapping-right-4");
      // var mappingRight5 = document.getElementById("mapping-right-5");
      // var mappingRight6 = document.getElementById("mapping-right-6");

   
      // var question1ElementValue = question1Element.options[question1Element.selectedIndex].innerHTML;
      // var question2ElementValue = question1Element.options[question2Element.selectedIndex].innerHTML;
      // var question3ElementValue = question1Element.options[question3Element.selectedIndex].innerHTML;
      // var question4ElementValue = question1Element.options[question4Element.selectedIndex].innerHTML;
      // var question5ElementValue = question1Element.options[question5Element.selectedIndex].innerHTML;
      // var question6ElementValue = question1Element.options[question6Element.selectedIndex].innerHTML;


       var mappedFields = document.getElementById('mapped-field-list').getElementsByTagName('li');
        for( j=0; j< mappedFields.length; j++ )
                {
                 var currentItemRight = mappedFields[j]
                 var currentValueRight = currentItemRight.childNodes[0].nodeValue;

                  // loop through each dropdown to see if it matches "Name"
                    var dropdowns = document.getElementById('mapping-form').getElementsByTagName('select');
                        for( i=0; i< dropdowns.length; i++ )
                            {
                             var currentValueLeft = dropdowns[i].options[dropdowns[i].selectedIndex].innerHTML;
                             if (currentValueLeft == currentValueRight) {
                                    currentItemRight.classList.add("gray");
                                };
                            };
                        var counter = 0;
                        for( i=0; i< dropdowns.length; i++ )
                            {
                            var currentValueLeft = dropdowns[i].options[dropdowns[i].selectedIndex].innerHTML;
                                if (currentValueLeft == currentValueRight) {
                                    counter ++;
                                };
                             };
                            if (counter == 0 ) {
                                currentItemRight.classList.remove("gray");
                            }; 
                            if (counter >1) {
                                currentItemRight.getElementsByTagName('span')[0].textContent = counter;
                            };
                            if (counter ==1) {
                                currentItemRight.getElementsByTagName('span')[0].textContent = "";
                            }; 
                        // };
                };
      // if (question1ElementValue == mappingRight1.textContent) {
      //   mappingRight1.classList.add("gray");
      // }


 
      // var cityText = question2Element.options[question2Element.selectedIndex].innerHTML;


    };
};

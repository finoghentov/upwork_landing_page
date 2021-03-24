// var App =
// {
//   data : {},
//   fields :
//   {
//     "first_name" : /^[A-zÀ-ÿ \-,']{2,30}$/i,
//     "last_name" : /^[A-zÀ-ÿ \-,']{2,30}$/i,
//     "phone" : /^[+]*[(]{0,1}[0-9]{1,4}[)]{0,1}[-\s\./0-9]*$/i,
//     "email" : /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/i,
//     "address": new RegExp(/[a-zA-ZÀ-ÿ0-9 \-,']/i),
//     "city": new RegExp(/[a-zÀ-ÿA-Z \-,']/i),
//     "zip": new RegExp(/^[0-9]{5}$/i),
//     "privacy_policy" : /^true$/i
//   },
//
//   showSuccess : function()
//   {
//     document.querySelector("#element-920").innerHTML = "Nous allons vous contacter très prochainement afin de valider votre demande.";
//     document.querySelector("#element-920").style.padding = "20px";
//   },
//
//   step1 : function()
//   {
//     var fields = ["ChosenTrainingCourse", "IsCivilCervant", "Worked5YearsSince2015"];
//     var errors = 0;
//
//     for(i = 0; i < fields.length; i++)
//     {
//       var field = document.querySelector("[name='" + fields[i] + "']");
//
//       if(field.value == "empty")
//       {
//         errors++;
//         field.classList.add("error");
//       }
//
//       else field.classList.remove("error");
//
//       App.data[fields[i]] = field.value;
//     }
//
//     if(errors == 0)
//     {
//       document.querySelector("#element-558").classList.add("hidden");
//       document.querySelector("#element-560").classList.remove("hidden");
//     }
//   },
//
//   step2 : function()
//   {
//     var fields = ["last_name", "first_name", "email"];
//     var errors = 0;
//
//     for(i = 0; i < fields.length; i++)
//     {
//       var field = document.querySelector("[name='" + fields[i] + "']");
//
//       if(!field.value.match(App.fields[fields[i]]))
//       {
//         errors++;
//         field.classList.add("error");
//       }
//
//       else field.classList.remove("error");
//
//       App.data[fields[i]] = field.value;
//     }
//
//     if(errors == 0)
//     {
//       document.querySelector("#element-749").classList.add("hidden");
//       document.querySelector("#element-920").classList.remove("hidden");
//     }
//   },
//
//   step3 : function()
//   {
//     var fields = ["zip", "phone"];
//     var errors = 0;
//
//     for(i = 0; i < fields.length; i++)
//     {
//       var field = document.querySelector("[name='" + fields[i] + "']");
//
//       if(!field.value.match(App.fields[fields[i]]))
//       {
//         errors++;
//         field.classList.add("error");
//       }
//
//       else field.classList.remove("error");
//
//       App.data[fields[i]] = field.value;
//     }
//
//     if(!document.querySelector("[name='privacy_policy']").checked)
//     {
//       errors++;
//       document.querySelector("[name='privacy_policy']").parentElement.classList.add("error");
//     }
//
//     else document.querySelector("[name='privacy_policy']").parentElement.classList.remove("error");
//
//     var hiddens = document.querySelectorAll("[type=hidden]");
//
//     hiddens.forEach(function(input){App.data[input.name] = input.value});
//
//     if(errors == 0)
//     {
//       var request = new XMLHttpRequest();
//       request.open("POST", "https://api.reflexquotation.com/leads/lead", true);
//       request.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
//
//       request.onload = function()
//       {
//         App.showSuccess();
//       }
//
//       request.send(new URLSearchParams(App.data).toString());
//     }
//   }
// };

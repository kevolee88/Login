function getForm(o,n){n.removeClass("show"),o.addClass("show")}var sections={form:$("#form"),form_container:$(".form-container"),login:$("#login-form"),sign_up:$("#sign-up-form")},buttons={login:$("#login"),sign_up:$("#sign-up")};$(function(){getForm(sections.sign_up,sections.login),buttons.login.on("click",function(){buttons.sign_up.removeClass("active"),$(this).addClass("active"),getForm(sections.login,sections.sign_up)}),buttons.sign_up.on("click",function(){buttons.login.removeClass("active"),$(this).addClass("active"),getForm(sections.sign_up,sections.login)}),$("#form-sign-up").parsley().on("form:success",function(o){var n=o.$element.serializeJSON();console.log(n),o.$element.find("button[type=submit]").prop("disabled",!0)}),$("#form-login").parsley().on("form:success",function(o){var n=o.$element.serializeJSON();console.log(n),o.$element.find("button[type=submit]").prop("disabled",!0)})});
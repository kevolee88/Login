function getForm(n,o){o.removeClass("show"),n.addClass("show")}var sections={form:$("#form"),form_container:$(".form-container"),login:$("#login-form"),sign_up:$("#sign-up-form")},buttons={login:$("#login"),sign_up:$("#sign-up")};$(function(){getForm(sections.sign_up,sections.login),buttons.login.on("click",function(){buttons.sign_up.removeClass("active"),$(this).addClass("active"),getForm(sections.login,sections.sign_up)}),buttons.sign_up.on("click",function(){buttons.login.removeClass("active"),$(this).addClass("active"),getForm(sections.sign_up,sections.login)}),window.Parsley.on("form:submit",function(n){n.$element.serializeJSON();n.$element.find("button[type=submit]").prop("disabled",!0)})});
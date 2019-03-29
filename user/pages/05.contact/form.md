---
title: Contact
form:
    name: my-nice-form
    fields:
        -
            name: name
            label: Nom
            placeholder: Nom
            autofocus: 'on'
            autocomplete: 'on'
            type: text
            validate:
                required: true
        -
            name: email
            label: Email
            placeholder: Adresse
            type: email
            validate:
                rule: email
                required: true
        -
            name: message
            label: Message
            size: long
            placeholder: message
            type: textarea
            validate:
                required: true
    buttons:
        -
            type: submit
            value: Envoyer
            classes: btn
    process:
        -
            email:
                from: '{{ config.plugins.email.from }}'
                to:
                    - '{{ config.plugins.email.from }}'
                    - '{{ form.value.email }}'
                subject: '[Feedback] {{ form.value.name|e }}'
                body: '{% include ''forms/data.html.twig'' %}'
        -
            save:
                fileprefix: feedback-
                dateformat: Ymd-His-u
                extension: txt
                body: '{% include ''forms/data.txt.twig'' %}'
        -
            message: Merci!
        -
            display: thankyou
---


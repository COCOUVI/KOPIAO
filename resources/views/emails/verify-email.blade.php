@component('mail::message')
    <div style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); padding: 40px 20px; text-align: center; color: white;">
        <div style="background: white; width: 80px; height: 80px; border-radius: 50%; margin: 0 auto 20px; display: flex; align-items: center; justify-content: center;">
            <span style="font-size: 40px;">🎓</span>
        </div>
        <h1 style="margin: 0; font-size: 32px; font-weight: bold;">Bienvenue !</h1>
        <p style="margin: 10px 0 0 0; font-size: 18px; opacity: 0.9;">
            Prêt à commencer votre voyage éducatif ?
        </p>
    </div>

    <div style="padding: 40px 30px;">

        <h2 style="color: #333; text-align: center;">
            Bonjour <strong style="color: #667eea;">{{ $user->firstname }}</strong> 👋
        </h2>

        <p style="color: #666; text-align: center; font-size: 16px; line-height: 1.6;">
            Votre inscription sur <strong>EduBenin Tutorat</strong> a bien été prise en compte.<br>
            Il ne vous reste plus qu'une étape pour activer votre compte.
        </p>

        <div style="text-align: center; margin: 40px 0;">
            @component('mail::button', ['url' => $verificationUrl, 'color' => 'success'])
                <span style="font-size: 16px; font-weight: bold;">🎯 Activer mon compte</span>
            @endcomponent
        </div>

        <div style="background: #e8f5e8; padding: 20px; border-radius: 10px; margin: 30px 0;">
            <h4 style="color: #2d5016; margin-top: 0; text-align: center;">✨ Votre compte vous donne accès à :</h4>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-top: 15px;">
                <div style="text-align: center;">
                    <span style="font-size: 24px;">👨‍🏫</span>
                    <p style="margin: 5px 0; font-size: 14px; color: #2d5016;">Tuteurs vérifiés</p>
                </div>
                <div style="text-align: center;">
                    <span style="font-size: 24px;">💻</span>
                    <p style="margin: 5px 0; font-size: 14px; color: #2d5016;">Cours en ligne</p>
                </div>
                <div style="text-align: center;">
                    <span style="font-size: 24px;">📱</span>
                    <p style="margin: 5px 0; font-size: 14px; color: #2d5016;">Paiements mobiles</p>
                </div>
                <div style="text-align: center;">
                    <span style="font-size: 24px;">📊</span>
                    <p style="margin: 5px 0; font-size: 14px; color: #2d5016;">Suivi progression</p>
                </div>
            </div>
        </div>

        <div style="text-align: center; color: #ff6b6b; font-size: 14px; margin: 20px 0;">
            <strong>⚠️ Attention :</strong> Ce lien expire dans 60 minutes
        </div>

    </div>

    <div style="background: #f8f9fa; padding: 30px; text-align: center; border-top: 1px solid #e9ecef;">
        <h4 style="color: #333; margin-bottom: 15px;">Besoin d'aide ?</h4>
        <p style="color: #666; margin: 5px 0; font-size: 14px;">
            Contactez notre équipe à <a href="mailto:support@edubenin-tutorat.bj" style="color: #667eea;">support@edubenin-tutorat.bj</a>
        </p>
        <p style="color: #999; margin: 15px 0 0 0; font-size: 12px;">
            © {{ date('Y') }} EduBenin Tutorat. Tous droits réservés.
        </p>
    </div>

    @component('mail::subcopy')
        <div style="background: #fff3cd; padding: 15px; border-radius: 5px; margin-top: 20px;">
            <p style="margin: 0 0 10px 0; color: #856404; font-size: 12px;">
                <strong>Lien de secours :</strong> Si le bouton ne fonctionne pas, utilisez ce lien :
            </p>
            <p style="margin: 0; word-break: break-all; font-size: 11px;">
                <a href="{{ $verificationUrl }}" style="color: #667eea;">{{ $verificationUrl }}</a>
            </p>
        </div>
    @endcomponent

@endcomponent

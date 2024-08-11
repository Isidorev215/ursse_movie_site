<?php 
  function sendEmailVerification($to, $token){
    $message = '
    <table
        width="100%"
        cellpadding="0"
        cellspacing="0"
        role="presentation"
        style="
          box-sizing: border-box;
          font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto,
            Helvetica, Arial, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\',
            \'Segoe UI Symbol\';
          background-color: #ededf5;
          margin: 0;
          padding: 0;
          width: 100%;
        "
      >
        <tbody>
          <tr>
            <td
              align="center"
              style="
                box-sizing: border-box;
                font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto,
                  Helvetica, Arial, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\',
                  \'Segoe UI Symbol\';
              "
            >
              <table
                width="100%"
                cellpadding="0"
                cellspacing="0"
                role="presentation"
                style="
                  box-sizing: border-box;
                  font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto,
                    Helvetica, Arial, sans-serif, \'Apple Color Emoji\',
                    \'Segoe UI Emoji\', \'Segoe UI Symbol\';
                  margin: 0;
                  padding: 0;
                  width: 100%;
                "
              >
                <tbody>
                  <tr>
                    <td
                      style="
                        box-sizing: border-box;
                        font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\',
                          Roboto, Helvetica, Arial, sans-serif, \'Apple Color Emoji\',
                          \'Segoe UI Emoji\', \'Segoe UI Symbol\';
                        padding: 25px 0;
                        text-align: center;
                      "
                    >
                      <div
                        style="
                          box-sizing: border-box;
                          font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\',
                            Roboto, Helvetica, Arial, sans-serif, \'Apple Color Emoji\',
                            \'Segoe UI Emoji\', \'Segoe UI Symbol\';
                          color: #3d4852;
                          font-size: 19px;
                          font-weight: bold;
                          text-decoration: none;
                          display: inline-block;
                        "
                        target="_blank"
                      >
                        <span>Movvs</span>
                      </div>
                    </td>
                  </tr>

                  <tr>
                    <td
                      width="100%"
                      cellpadding="0"
                      cellspacing="0"
                      style="
                        box-sizing: border-box;
                        font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\',
                          Roboto, Helvetica, Arial, sans-serif, \'Apple Color Emoji\',
                          \'Segoe UI Emoji\', \'Segoe UI Symbol\';
                        background-color: #edf2f7;
                        border-bottom: 1px solid #edf2f7;
                        border-top: 1px solid #edf2f7;
                        margin: 0;
                        padding: 0;
                        width: 100%;
                      "
                    >
                      <table
                        align="center"
                        width="570"
                        cellpadding="0"
                        cellspacing="0"
                        role="presentation"
                        style="
                          box-sizing: border-box;
                          font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\',
                            Roboto, Helvetica, Arial, sans-serif, \'Apple Color Emoji\',
                            \'Segoe UI Emoji\', \'Segoe UI Symbol\';
                          background-color: #ffffff;
                          border-color: #e8e5ef;
                          border-radius: 2px;
                          border-width: 1px;
                          margin: 0 auto;
                          padding: 0;
                          width: 570px;
                        "
                      >
                        <tbody>
                          <tr>
                            <td
                              style="
                                box-sizing: border-box;
                                font-family: -apple-system, BlinkMacSystemFont,
                                  \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif,
                                  \'Apple Color Emoji\', \'Segoe UI Emoji\',
                                  \'Segoe UI Symbol\';
                                max-width: 100vw;
                                padding: 32px;
                              "
                            >
                              <h1
                                style="
                                  box-sizing: border-box;
                                  font-family: -apple-system, BlinkMacSystemFont,
                                    \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif,
                                    \'Apple Color Emoji\', \'Segoe UI Emoji\',
                                    \'Segoe UI Symbol\';
                                  color: #3d4852;
                                  font-size: 18px;
                                  font-weight: bold;
                                  margin-top: 0;
                                  text-align: left;
                                "
                              >
                                Verify Your Email To Login
                              </h1>
                              <p
                                style="
                                  box-sizing: border-box;
                                  font-family: -apple-system, BlinkMacSystemFont,
                                    \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif,
                                    \'Apple Color Emoji\', \'Segoe UI Emoji\',
                                    \'Segoe UI Symbol\';
                                  font-size: 16px;
                                  line-height: 1.5em;
                                  margin-top: 0;
                                  text-align: left;
                                "
                              >
                                Click to verify your email and gain full access to the Movvs Platform</p>
                              <table
                                align="center"
                                width="100%"
                                cellpadding="0"
                                cellspacing="0"
                                role="presentation"
                                style="
                                  box-sizing: border-box;
                                  font-family: -apple-system, BlinkMacSystemFont,
                                    \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif,
                                    \'Apple Color Emoji\', \'Segoe UI Emoji\',
                                    \'Segoe UI Symbol\';
                                  margin: 30px auto;
                                  padding: 0;
                                  text-align: center;
                                  width: 100%;
                                "
                              >
                                <tbody>
                                  <tr>
                                    <td
                                      align="center"
                                      style="
                                        box-sizing: border-box;
                                        font-family: -apple-system, BlinkMacSystemFont,
                                          \'Segoe UI\', Roboto, Helvetica, Arial,
                                          sans-serif, \'Apple Color Emoji\',
                                          \'Segoe UI Emoji\', \'Segoe UI Symbol\';
                                      "
                                    >
                                      <table
                                        width="100%"
                                        border="0"
                                        cellpadding="0"
                                        cellspacing="0"
                                        role="presentation"
                                        style="
                                          box-sizing: border-box;
                                          font-family: -apple-system,
                                            BlinkMacSystemFont, \'Segoe UI\', Roboto,
                                            Helvetica, Arial, sans-serif,
                                            \'Apple Color Emoji\', \'Segoe UI Emoji\',
                                            \'Segoe UI Symbol\';
                                        "
                                      >
                                        <tbody>
                                          <tr>
                                            <td
                                              align="center"
                                              style="
                                                box-sizing: border-box;
                                                font-family: -apple-system,
                                                  BlinkMacSystemFont, \'Segoe UI\',
                                                  Roboto, Helvetica, Arial, sans-serif,
                                                  \'Apple Color Emoji\',
                                                  \'Segoe UI Emoji\', \'Segoe UI Symbol\';
                                              "
                                            >
                                              <table
                                                border="0"
                                                cellpadding="0"
                                                cellspacing="0"
                                                role="presentation"
                                                style="
                                                  box-sizing: border-box;
                                                  font-family: -apple-system,
                                                    BlinkMacSystemFont, \'Segoe UI\',
                                                    Roboto, Helvetica, Arial,
                                                    sans-serif, \'Apple Color Emoji\',
                                                    \'Segoe UI Emoji\',
                                                    \'Segoe UI Symbol\';
                                                "
                                              >
                                                <tbody>
                                                  <tr>
                                                    <td
                                                      style="
                                                        box-sizing: border-box;
                                                        font-family: -apple-system,
                                                          BlinkMacSystemFont,
                                                          \'Segoe UI\', Roboto,
                                                          Helvetica, Arial, sans-serif,
                                                          \'Apple Color Emoji\',
                                                          \'Segoe UI Emoji\',
                                                          \'Segoe UI Symbol\';
                                                      "
                                                    >
                                                      <a
                                                        href="https://nwaiwui.ursse.org/handlers/verifyemail.php?token=' . urlencode($token) . '"
                                                        rel="noopener"
                                                        style="
                                                          box-sizing: border-box;
                                                          font-family: -apple-system,
                                                            BlinkMacSystemFont,
                                                            \'Segoe UI\', Roboto,
                                                            Helvetica, Arial,
                                                            sans-serif,
                                                            \'Apple Color Emoji\',
                                                            \'Segoe UI Emoji\',
                                                            \'Segoe UI Symbol\';
                                                          border-radius: 4px;
                                                          color: #fff;
                                                          display: inline-block;
                                                          overflow: hidden;
                                                          text-decoration: none;
                                                          background-color: #6236ff;
                                                          border-bottom: 8px solid
                                                            #6236ff;
                                                          border-left: 18px solid
                                                            #6236ff;
                                                          border-right: 18px solid
                                                            #6236ff;
                                                          border-top: 8px solid
                                                            #6236ff;
                                                        "
                                                        target="_blank"
                                                        >Verify</a
                                                      >
                                                    </td>
                                                  </tr>
                                                </tbody>
                                              </table>
                                            </td>
                                          </tr>
                                        </tbody>
                                      </table>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                              <p
                                style="
                                  box-sizing: border-box;
                                  font-family: -apple-system, BlinkMacSystemFont,
                                    \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif,
                                    \'Apple Color Emoji\', \'Segoe UI Emoji\',
                                    \'Segoe UI Symbol\';
                                  font-size: 16px;
                                  line-height: 1.5em;
                                  margin-top: 0;
                                  text-align: left;
                                "
                              >
                                Regards,<br />
                                <span>Movvs admin</span>
                              </p>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </td>
                  </tr>

                  <tr>
                    <td
                      style="
                        box-sizing: border-box;
                        font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\',
                          Roboto, Helvetica, Arial, sans-serif, \'Apple Color Emoji\',
                          \'Segoe UI Emoji\', \'Segoe UI Symbol\';
                      "
                    >
                      <table
                        align="center"
                        width="570"
                        cellpadding="0"
                        cellspacing="0"
                        role="presentation"
                        style="
                          box-sizing: border-box;
                          font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\',
                            Roboto, Helvetica, Arial, sans-serif, \'Apple Color Emoji\',
                            \'Segoe UI Emoji\', \'Segoe UI Symbol\';
                          margin: 0 auto;
                          padding: 0;
                          text-align: center;
                          width: 570px;
                        "
                      >
                        <tbody>
                          <tr>
                            <td
                              align="center"
                              style="
                                box-sizing: border-box;
                                font-family: -apple-system, BlinkMacSystemFont,
                                  \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif,
                                  \'Apple Color Emoji\', \'Segoe UI Emoji\',
                                  \'Segoe UI Symbol\';
                                max-width: 100vw;
                                padding: 32px;
                              "
                            >
                              <p
                                style="
                                  box-sizing: border-box;
                                  font-family: -apple-system, BlinkMacSystemFont,
                                    \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif,
                                    \'Apple Color Emoji\', \'Segoe UI Emoji\',
                                    \'Segoe UI Symbol\';
                                  line-height: 1.5em;
                                  margin-top: 0;
                                  color: #b0adc5;
                                  font-size: 12px;
                                  text-align: center;
                                "
                              >
                                © 2024 <span>Movvs</span>. All rights
                                reserved.
                              </p>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </td>
                  </tr>
                </tbody>
              </table>
            </td>
          </tr>
        </tbody>
      </table>
    ';

    // email headers
    $subject = 'Email Verification';
    $headers = array(
      'From' => 'Movvs <donotreply@nwaiwui.ursse.org>',
      'Reply-To' => 'donotreply@nwaiwui.ursse.org',
      'Content-type' => 'text/html; charset=UTF-8',
      'MIME-Version' => '1.0',
      'X-Mailer' => 'PHP/' . phpversion()
    );

    return mail($to, $subject, $message, $headers);

  }

  function sendNewPasswordEmail($to, $new_password){
    $message = '
    <table
        width="100%"
        cellpadding="0"
        cellspacing="0"
        role="presentation"
        style="
          box-sizing: border-box;
          font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto,
            Helvetica, Arial, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\',
            \'Segoe UI Symbol\';
          background-color: #ededf5;
          margin: 0;
          padding: 0;
          width: 100%;
        "
      >
        <tbody>
          <tr>
            <td
              align="center"
              style="
                box-sizing: border-box;
                font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto,
                  Helvetica, Arial, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\',
                  \'Segoe UI Symbol\';
              "
            >
              <table
                width="100%"
                cellpadding="0"
                cellspacing="0"
                role="presentation"
                style="
                  box-sizing: border-box;
                  font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto,
                    Helvetica, Arial, sans-serif, \'Apple Color Emoji\',
                    \'Segoe UI Emoji\', \'Segoe UI Symbol\';
                  margin: 0;
                  padding: 0;
                  width: 100%;
                "
              >
                <tbody>
                  <tr>
                    <td
                      style="
                        box-sizing: border-box;
                        font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\',
                          Roboto, Helvetica, Arial, sans-serif, \'Apple Color Emoji\',
                          \'Segoe UI Emoji\', \'Segoe UI Symbol\';
                        padding: 25px 0;
                        text-align: center;
                      "
                    >
                      <div
                        style="
                          box-sizing: border-box;
                          font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\',
                            Roboto, Helvetica, Arial, sans-serif, \'Apple Color Emoji\',
                            \'Segoe UI Emoji\', \'Segoe UI Symbol\';
                          color: #3d4852;
                          font-size: 19px;
                          font-weight: bold;
                          text-decoration: none;
                          display: inline-block;
                        "
                        target="_blank"
                      >
                        <span>Movvs</span>
                      </div>
                    </td>
                  </tr>

                  <tr>
                    <td
                      width="100%"
                      cellpadding="0"
                      cellspacing="0"
                      style="
                        box-sizing: border-box;
                        font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\',
                          Roboto, Helvetica, Arial, sans-serif, \'Apple Color Emoji\',
                          \'Segoe UI Emoji\', \'Segoe UI Symbol\';
                        background-color: #edf2f7;
                        border-bottom: 1px solid #edf2f7;
                        border-top: 1px solid #edf2f7;
                        margin: 0;
                        padding: 0;
                        width: 100%;
                      "
                    >
                      <table
                        align="center"
                        width="570"
                        cellpadding="0"
                        cellspacing="0"
                        role="presentation"
                        style="
                          box-sizing: border-box;
                          font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\',
                            Roboto, Helvetica, Arial, sans-serif, \'Apple Color Emoji\',
                            \'Segoe UI Emoji\', \'Segoe UI Symbol\';
                          background-color: #ffffff;
                          border-color: #e8e5ef;
                          border-radius: 2px;
                          border-width: 1px;
                          margin: 0 auto;
                          padding: 0;
                          width: 570px;
                        "
                      >
                        <tbody>
                          <tr>
                            <td
                              style="
                                box-sizing: border-box;
                                font-family: -apple-system, BlinkMacSystemFont,
                                  \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif,
                                  \'Apple Color Emoji\', \'Segoe UI Emoji\',
                                  \'Segoe UI Symbol\';
                                max-width: 100vw;
                                padding: 32px;
                              "
                            >
                              <h1
                                style="
                                  box-sizing: border-box;
                                  font-family: -apple-system, BlinkMacSystemFont,
                                    \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif,
                                    \'Apple Color Emoji\', \'Segoe UI Emoji\',
                                    \'Segoe UI Symbol\';
                                  color: #3d4852;
                                  font-size: 18px;
                                  font-weight: bold;
                                  margin-top: 0;
                                  text-align: left;
                                "
                              >
                                Password Reset
                              </h1>
                              <p
                                style="
                                  box-sizing: border-box;
                                  font-family: -apple-system, BlinkMacSystemFont,
                                    \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif,
                                    \'Apple Color Emoji\', \'Segoe UI Emoji\',
                                    \'Segoe UI Symbol\';
                                  font-size: 16px;
                                  line-height: 1.5em;
                                  margin-top: 0;
                                  text-align: left;
                                "
                              >
                                As requested, your password has been reset. Use the password below to log in from now on.</p>
                              <table
                                align="center"
                                width="100%"
                                cellpadding="0"
                                cellspacing="0"
                                role="presentation"
                                style="
                                  box-sizing: border-box;
                                  font-family: -apple-system, BlinkMacSystemFont,
                                    \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif,
                                    \'Apple Color Emoji\', \'Segoe UI Emoji\',
                                    \'Segoe UI Symbol\';
                                  margin: 30px auto;
                                  padding: 0;
                                  text-align: center;
                                  width: 100%;
                                "
                              >
                                <tbody>
                                  <tr>
                                    <td
                                      align="center"
                                      style="
                                        box-sizing: border-box;
                                        font-family: -apple-system, BlinkMacSystemFont,
                                          \'Segoe UI\', Roboto, Helvetica, Arial,
                                          sans-serif, \'Apple Color Emoji\',
                                          \'Segoe UI Emoji\', \'Segoe UI Symbol\';
                                      "
                                    >
                                      <table
                                        width="100%"
                                        border="0"
                                        cellpadding="0"
                                        cellspacing="0"
                                        role="presentation"
                                        style="
                                          box-sizing: border-box;
                                          font-family: -apple-system,
                                            BlinkMacSystemFont, \'Segoe UI\', Roboto,
                                            Helvetica, Arial, sans-serif,
                                            \'Apple Color Emoji\', \'Segoe UI Emoji\',
                                            \'Segoe UI Symbol\';
                                        "
                                      >
                                        <tbody>
                                          <tr>
                                            <td
                                              align="center"
                                              style="
                                                box-sizing: border-box;
                                                font-family: -apple-system,
                                                  BlinkMacSystemFont, \'Segoe UI\',
                                                  Roboto, Helvetica, Arial, sans-serif,
                                                  \'Apple Color Emoji\',
                                                  \'Segoe UI Emoji\', \'Segoe UI Symbol\';
                                              "
                                            >
                                              <table
                                                border="0"
                                                cellpadding="0"
                                                cellspacing="0"
                                                role="presentation"
                                                style="
                                                  box-sizing: border-box;
                                                  font-family: -apple-system,
                                                    BlinkMacSystemFont, \'Segoe UI\',
                                                    Roboto, Helvetica, Arial,
                                                    sans-serif, \'Apple Color Emoji\',
                                                    \'Segoe UI Emoji\',
                                                    \'Segoe UI Symbol\';
                                                "
                                              >
                                                <tbody>
                                                  <tr>
                                                    <td
                                                      style="
                                                        box-sizing: border-box;
                                                        font-family: -apple-system,
                                                          BlinkMacSystemFont,
                                                          \'Segoe UI\', Roboto,
                                                          Helvetica, Arial, sans-serif,
                                                          \'Apple Color Emoji\',
                                                          \'Segoe UI Emoji\',
                                                          \'Segoe UI Symbol\';
                                                      "
                                                    >
                                                      <div
                                                        style="
                                                          box-sizing: border-box;
                                                          font-family: -apple-system,
                                                            BlinkMacSystemFont,
                                                            \'Segoe UI\', Roboto,
                                                            Helvetica, Arial,
                                                            sans-serif,
                                                            \'Apple Color Emoji\',
                                                            \'Segoe UI Emoji\',
                                                            \'Segoe UI Symbol\';
                                                          border-radius: 4px;
                                                          color: #fff;
                                                          display: inline-block;
                                                          overflow: hidden;
                                                          text-decoration: none;
                                                          background-color: #6236ff;
                                                          border-bottom: 8px solid
                                                            #6236ff;
                                                          border-left: 18px solid
                                                            #6236ff;
                                                          border-right: 18px solid
                                                            #6236ff;
                                                          border-top: 8px solid
                                                            #6236ff;
                                                        "
                                                        >'.$new_password.'</div
                                                      >
                                                    </td>
                                                  </tr>
                                                </tbody>
                                              </table>
                                            </td>
                                          </tr>
                                        </tbody>
                                      </table>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                              <p
                                style="
                                  box-sizing: border-box;
                                  font-family: -apple-system, BlinkMacSystemFont,
                                    \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif,
                                    \'Apple Color Emoji\', \'Segoe UI Emoji\',
                                    \'Segoe UI Symbol\';
                                  font-size: 16px;
                                  line-height: 1.5em;
                                  margin-top: 0;
                                  text-align: left;
                                "
                              >
                                Regards,<br />
                                <span>Movvs admin</span>
                              </p>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </td>
                  </tr>

                  <tr>
                    <td
                      style="
                        box-sizing: border-box;
                        font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\',
                          Roboto, Helvetica, Arial, sans-serif, \'Apple Color Emoji\',
                          \'Segoe UI Emoji\', \'Segoe UI Symbol\';
                      "
                    >
                      <table
                        align="center"
                        width="570"
                        cellpadding="0"
                        cellspacing="0"
                        role="presentation"
                        style="
                          box-sizing: border-box;
                          font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\',
                            Roboto, Helvetica, Arial, sans-serif, \'Apple Color Emoji\',
                            \'Segoe UI Emoji\', \'Segoe UI Symbol\';
                          margin: 0 auto;
                          padding: 0;
                          text-align: center;
                          width: 570px;
                        "
                      >
                        <tbody>
                          <tr>
                            <td
                              align="center"
                              style="
                                box-sizing: border-box;
                                font-family: -apple-system, BlinkMacSystemFont,
                                  \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif,
                                  \'Apple Color Emoji\', \'Segoe UI Emoji\',
                                  \'Segoe UI Symbol\';
                                max-width: 100vw;
                                padding: 32px;
                              "
                            >
                              <p
                                style="
                                  box-sizing: border-box;
                                  font-family: -apple-system, BlinkMacSystemFont,
                                    \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif,
                                    \'Apple Color Emoji\', \'Segoe UI Emoji\',
                                    \'Segoe UI Symbol\';
                                  line-height: 1.5em;
                                  margin-top: 0;
                                  color: #b0adc5;
                                  font-size: 12px;
                                  text-align: center;
                                "
                              >
                                © 2024 <span>Movvs</span>. All rights
                                reserved.
                              </p>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </td>
                  </tr>
                </tbody>
              </table>
            </td>
          </tr>
        </tbody>
      </table>
    ';

    // email headers
    $subject = 'Password Reset';
    $headers = array(
      'From' => 'Movvs <donotreply@nwaiwui.ursse.org>',
      'Reply-To' => 'donotreply@nwaiwui.ursse.org',
      'Content-type' => 'text/html; charset=UTF-8',
      'MIME-Version' => '1.0',
      'X-Mailer' => 'PHP/' . phpversion()
    );

    return mail($to, $subject, $message, $headers);
  }
?>
<?php

return [

    'label'                            => '通知',
    'create'                           => '添加新的通知',
    'create_slack'                     => '添加新的Slack通知',
    'create_mail'                      => '添加新的邮件通知',
    'create_custom'                    => '添加新的Webhook通知',
    'edit'                             => '编辑通知',
    'edit_slack'                       => '编辑Slack通知',
    'edit_mail'                        => '编辑邮件通知',
    'edit_custom'                      => '编辑Webhook通知',
    'none'                             => '项目还没有建立任何通知',
    'integration_help'                 => '通过集成第三方服务，Fixhub可实现对项目的部署状态进行实时通知。',
    'name'                             => '名称',
    'type'                             => '类型',
    'warning'                          => '通知无法保存，请检查下面的表单',
    'not_configured_title'             => '服务未配置',
    'not_configured'                   => '选择的通知类型无法使用，因为尚未配置',
    'triggers'                         => '触发事件',
    'webhook'                          => 'Webhook URL',
    'icon'                             => '图标',
    'bot'                              => 'Bot',
    'icon_info'                        => '输入 emoji, 例如 :ghost: 或者图片 URL ',
    'channel'                          => '频道',
    'deployments'                      => '部署',
    'succeeded'                        => '成功',
    'failed'                           => '失败',
    'on_deployment_success'            => '部署成功',
    'on_deployment_failure'            => '部署失败',
    'custom'                           => 'Webhook',
    'slack'                            => 'Slack',
    'mail'                             => '邮件',
    'which'                            => '请选择通知类型',
    'test_message'                     => '发条测试消息，证明我的存在。 :ok_hand:',
    'enabled'                          => '是否启用?',

    // Slack
    'branch'                           => '分支',
    'project'                          => '项目',
    'commit'                           => '代码版本号',
    'committer'                        => '代码提交者',
    'deployment_details'               => '部署详情',
    'deployment_reason'                => '部署原因 - :reason',
    'deployment_success_slack_message' => ':white_check_mark: 上线任务 %s 部署成功! :smile:',
    'deployment_failed_slack_message'  => ':x: 上线任务 %s 部署失败! :cry:',

    // Email
    'project_name'                     => '项目名称',
    'deployed_branch'                  => '部署分支',
    'deployment_details'               => '部署详情',
    'project_details'                  => '项目详情',
    'started_at'                       => '开始时间',
    'finished_at'                      => '完成时间',
    'last_committer'                   => '代码提交者',
    'last_commit'                      => '代码版本号',
    'reason'                           => '部署原因 - :reason',
    'deployment_success_email_subject' => '部署已完成',
    'deployment_success_email_message' => '本次部署任务已执行成功',
    'deployment_failed_email_subject'  => '部署失败',
    'deployment_failed_email_message'  => '本次部署任务执行失败了',
];
<?php
/*
 * Settings metadata file
 */

return array(
  'opt_in' => array(
    'group_name' => 'Speakcivi API Preferences',
    'group' => 'speakcivi',
    'name' => 'opt_in',
    'type' => 'Boolean',
    'quick_form_type' => 'YesNo',
    'default' => 1,
    'add' => '4.6',
    'is_domain' => 1,
    'is_contact' => 0,
    'title' => 'Opt-in',
    'description' => "Opt-in",
    'help_text' => "Opt-in",
  ),
  'url_speakout' => array(
    'group_name' => 'Speakcivi API Preferences',
    'group' => 'speakcivi',
    'name' => 'url_speakout',
    'type' => 'String',
    'quick_form_type' => 'Element',
    'html_type' => 'text',
    'default' => 'act.wemove.eu/campaigns',
    'add' => '4.6',
    'is_domain' => 1,
    'is_contact' => 0,
    'title' => 'Url to Speakout API',
    'description' => "Url to Speakout API",
    'help_text' => "Url to Speakout API",
  ),
  'group_id' => array(
    'group_name' => 'Speakcivi API Preferences',
    'group' => 'speakcivi',
    'name' => 'group_id',
    'type' => 'Integer',
    'quick_form_type' => 'Element',
    'html_type' => 'text',
    'default' => 42,
    'add' => '4.6',
    'is_domain' => 1,
    'is_contact' => 0,
    'title' => 'Default group Id',
    'description' => 'Default group Id',
    'help_text' => 'Default group Id',
  ),
  'default_language_group_id' => array(
    'group_name' => 'Speakcivi API Preferences',
    'group' => 'speakcivi',
    'name' => 'default_language_group_id',
    'type' => 'Integer',
    'quick_form_type' => 'Element',
    'html_type' => 'text',
    'default' => 47,
    'add' => '4.6',
    'is_domain' => 1,
    'is_contact' => 0,
    'title' => 'Default language group Id',
    'description' => 'Default language group Id',
    'help_text' => 'Default language group Id',
  ),
  'language_group_name_suffix' => array(
    'group_name' => 'Speakcivi API Preferences',
    'group' => 'speakcivi',
    'name' => 'language_group_name_suffix',
    'type' => 'String',
    'quick_form_type' => 'Element',
    'html_type' => 'text',
    'default' => '-language-activists',
    'add' => '4.6',
    'is_domain' => 1,
    'is_contact' => 0,
    'title' => 'Suffix of language group name',
    'description' => "Suffix of language group name",
    'help_text' => "Suffix of language group name",
  ),
  'language_tag_name_prefix' => array(
    'group_name' => 'Speakcivi API Preferences',
    'group' => 'speakcivi',
    'name' => 'language_tag_name_prefix',
    'type' => 'String',
    'quick_form_type' => 'Element',
    'html_type' => 'text',
    'default' => 'can speak ',
    'add' => '4.6',
    'is_domain' => 1,
    'is_contact' => 0,
    'title' => 'Prefix of language tag name',
    'description' => "Prefix of language tag name",
    'help_text' => "Prefix of language tag name",
  ),
  'default_language' => array(
    'group_name' => 'Speakcivi API Preferences',
    'group' => 'speakcivi',
    'name' => 'default_language',
    'type' => 'String',
    'quick_form_type' => 'Element',
    'html_type' => 'text',
    'default' => 'en_GB',
    'add' => '4.6',
    'is_domain' => 1,
    'is_contact' => 0,
    'title' => 'Default language',
    'description' => "Default language",
    'help_text' => "Default language",
  ),
  'field_template_id' => array(
    'group_name' => 'Speakcivi API Preferences',
    'group' => 'speakcivi',
    'name' => 'field_template_id',
    'type' => 'String',
    'quick_form_type' => 'Element',
    'html_type' => 'text',
    'default' => 'custom_3',
    'add' => '4.6',
    'is_domain' => 1,
    'is_contact' => 0,
    'title' => 'Custom field for campaign\'s message template',
    'description' => "Custom field for campaign's message template",
    'help_text' => "Custom field for campaign's message template",
  ),
  'field_language' => array(
    'group_name' => 'Speakcivi API Preferences',
    'group' => 'speakcivi',
    'name' => 'field_language',
    'type' => 'String',
    'quick_form_type' => 'Element',
    'html_type' => 'text',
    'default' => 'custom_4',
    'add' => '4.6',
    'is_domain' => 1,
    'is_contact' => 0,
    'title' => 'Custom field for campaign\'s language',
    'description' => "Custom field for campaign's language",
    'help_text' => "Custom field for campaign's language",
  ),
  'field_sender_mail' => array(
    'group_name' => 'Speakcivi API Preferences',
    'group' => 'speakcivi',
    'name' => 'field_sender_mail',
    'type' => 'String',
    'quick_form_type' => 'Element',
    'html_type' => 'text',
    'default' => 'custom_5',
    'add' => '4.6',
    'is_domain' => 1,
    'is_contact' => 0,
    'title' => 'Custom field for campaign\'s sender mail',
    'description' => "Custom field for campaign's sender mail",
    'help_text' => "Custom field for campaign's sender mail",
  ),
  'field_url_campaign' => array(
    'group_name' => 'Speakcivi API Preferences',
    'group' => 'speakcivi',
    'name' => 'field_url_campaign',
    'type' => 'String',
    'quick_form_type' => 'Element',
    'html_type' => 'text',
    'default' => 'custom_8',
    'add' => '4.6',
    'is_domain' => 1,
    'is_contact' => 0,
    'title' => 'Custom field for URL of campaign on speakout',
    'description' => "Custom field for URL of campaign on speakout",
    'help_text' => "Custom field for URL of campaign on speakout",
  ),
  'field_utm_campaign' => array(
    'group_name' => 'Speakcivi API Preferences',
    'group' => 'speakcivi',
    'name' => 'field_utm_campaign',
    'type' => 'String',
    'quick_form_type' => 'Element',
    'html_type' => 'text',
    'default' => 'custom_11',
    'add' => '4.6',
    'is_domain' => 1,
    'is_contact' => 0,
    'title' => 'Custom field for UTM Campaign',
    'description' => "Custom field for UTM Campaign",
    'help_text' => "Custom field for UTM Campaign",
  ),
  'field_twitter_share_text' => array(
    'group_name' => 'Speakcivi API Preferences',
    'group' => 'speakcivi',
    'name' => 'field_twitter_share_text',
    'type' => 'String',
    'quick_form_type' => 'Element',
    'html_type' => 'text',
    'default' => 'custom_16',
    'add' => '4.6',
    'is_domain' => 1,
    'is_contact' => 0,
    'title' => 'Custom field for text used in twitter sharing',
    'description' => "Custom field for text used in twitter sharing",
    'help_text' => "Custom field for text used in twitter sharing",
  ),
  'field_subject_new' => array(
    'group_name' => 'Speakcivi API Preferences',
    'group' => 'speakcivi',
    'name' => 'field_subject_new',
    'type' => 'String',
    'quick_form_type' => 'Element',
    'html_type' => 'text',
    'default' => 'custom_17',
    'add' => '4.6',
    'is_domain' => 1,
    'is_contact' => 0,
    'title' => 'Custom field for subject for the emails to the contacts that aren\'t already members and need to confirm their signature',
    'description' => 'Custom field for subject for the emails to the contacts that aren\'t already members and need to confirm their signature',
    'help_text' => 'Custom field for subject for the emails to the contacts that aren\'t already members and need to confirm their signature',
  ),
  'field_subject_current' => array(
    'group_name' => 'Speakcivi API Preferences',
    'group' => 'speakcivi',
    'name' => 'field_subject_current',
    'type' => 'String',
    'quick_form_type' => 'Element',
    'html_type' => 'text',
    'default' => 'custom_18',
    'add' => '4.6',
    'is_domain' => 1,
    'is_contact' => 0,
    'title' => 'Custom field for subject for the emails to the contacts that are already members and don\'t need to confirm their signature',
    'description' => 'Custom field for subject for the emails to the contacts that are already members and don\'t need to confirm their signature',
    'help_text' => 'Custom field for subject for the emails to the contacts that are already members and don\'t need to confirm their signature',
  ),
  'field_message_new' => array(
    'group_name' => 'Speakcivi API Preferences',
    'group' => 'speakcivi',
    'name' => 'field_message_new',
    'type' => 'String',
    'quick_form_type' => 'Element',
    'html_type' => 'text',
    'default' => 'custom_19',
    'add' => '4.6',
    'is_domain' => 1,
    'is_contact' => 0,
    'title' => 'Custom field for body for the emails to the contacts that aren\'t already members and need to confirm their signature',
    'description' => 'Custom field for body for the emails to the contacts that aren\'t already members and need to confirm their signature',
    'help_text' => 'Custom field for body for the emails to the contacts that aren\'t already members and need to confirm their signature',
  ),
  'field_message_current' => array(
    'group_name' => 'Speakcivi API Preferences',
    'group' => 'speakcivi',
    'name' => 'field_message_current',
    'type' => 'String',
    'quick_form_type' => 'Element',
    'html_type' => 'text',
    'default' => 'custom_20',
    'add' => '4.6',
    'is_domain' => 1,
    'is_contact' => 0,
    'title' => 'Custom field for body for the emails to the contacts that are already members and don\'t need to confirm their signature',
    'description' => 'Custom field for body for the emails to the contacts that are already members and don\'t need to confirm their signature',
    'help_text' => 'Custom field for body for the emails to the contacts that are already members and don\'t need to confirm their signature',
  ),
  'from' => array(
    'group_name' => 'Speakcivi API Preferences',
    'group' => 'speakcivi',
    'name' => 'from',
    'type' => 'String',
    'quick_form_type' => 'Element',
    'html_type' => 'text',
    'default' => '"Xavier - WeMove.EU" <info@wemove.eu>',
    'add' => '4.6',
    'is_domain' => 1,
    'is_contact' => 0,
    'title' => 'From',
    'description' => "From",
    'help_text' => "From",
  ),
  'activity_type_join' => array(
    'group_name' => 'Speakcivi API Preferences',
    'group' => 'speakcivi',
    'name' => 'activity_type_join',
    'type' => 'String',
    'quick_form_type' => 'Element',
    'html_type' => 'text',
    'default' => 'Optout',
    'add' => '4.6',
    'is_domain' => 1,
    'is_contact' => 0,
    'title' => 'Activity type used for marking contacts who are added to group.',
    'description' => 'Activity type used for marking contacts who are added to group.',
    'help_text' => 'Activity type used for marking contacts who are added to group.',
  ),
  'activity_type_leave' => array(
    'group_name' => 'Speakcivi API Preferences',
    'group' => 'speakcivi',
    'name' => 'activity_type_leave',
    'type' => 'String',
    'quick_form_type' => 'Element',
    'html_type' => 'text',
    'default' => 'Leave',
    'add' => '4.6',
    'is_domain' => 1,
    'is_contact' => 0,
    'title' => 'Activity type used for marking contacts who are removed from group.',
    'description' => 'Activity type used for marking contacts who are removed from group.',
    'help_text' => 'Activity type used for marking contacts who are removed from group.',
  ),
  'country_lang_mapping' => array(
    'group_name' => 'Speakcivi API Preferences',
    'group' => 'speakcivi',
    'name' => 'country_lang_mapping',
    'type' => 'Array',
    'quick_form_type' => 'Element',
    'html_type' => 'textarea',
    'default' => array(
      'DE' => 'de_DE',
      'EN' => 'en_GB',
      'ES' => 'es_ES',
      'FR' => 'fr_FR',
      'IT' => 'it_IT',
      'PL' => 'pl_PL',
    ),
    'add' => '4.6',
    'is_domain' => 1,
    'is_contact' => 0,
    'title' => 'Mapping between country code and language',
    'description' => "Mapping between country code and language",
    'help_text' => "Mapping between country code and language",
  ),
);

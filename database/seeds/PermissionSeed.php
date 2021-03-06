<?php

use Illuminate\Database\Seeder;

class PermissionSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'title' => 'user_management_access',],
            ['id' => 7, 'title' => 'permission_access',],
            ['id' => 8, 'title' => 'permission_create',],
            ['id' => 9, 'title' => 'permission_edit',],
            ['id' => 10, 'title' => 'permission_view',],
            ['id' => 11, 'title' => 'permission_delete',],
            ['id' => 17, 'title' => 'role_access',],
            ['id' => 18, 'title' => 'role_create',],
            ['id' => 19, 'title' => 'role_edit',],
            ['id' => 20, 'title' => 'role_view',],
            ['id' => 21, 'title' => 'role_delete',],
            ['id' => 27, 'title' => 'user_access',],
            ['id' => 28, 'title' => 'user_create',],
            ['id' => 29, 'title' => 'user_edit',],
            ['id' => 30, 'title' => 'user_view',],
            ['id' => 31, 'title' => 'user_delete',],
            ['id' => 36, 'title' => 'user_action_access',],
            ['id' => 37, 'title' => 'user_action_create',],
            ['id' => 38, 'title' => 'user_action_edit',],
            ['id' => 39, 'title' => 'user_action_view',],
            ['id' => 40, 'title' => 'user_action_delete',],
            ['id' => 57, 'title' => 'expense_category_access',],
            ['id' => 58, 'title' => 'expense_category_create',],
            ['id' => 59, 'title' => 'expense_category_edit',],
            ['id' => 60, 'title' => 'expense_category_view',],
            ['id' => 61, 'title' => 'expense_category_delete',],
            ['id' => 142, 'title' => 'faq_management_access',],
            ['id' => 143, 'title' => 'faq_category_access',],
            ['id' => 144, 'title' => 'faq_category_create',],
            ['id' => 145, 'title' => 'faq_category_edit',],
            ['id' => 146, 'title' => 'faq_category_view',],
            ['id' => 147, 'title' => 'faq_category_delete',],
            ['id' => 148, 'title' => 'faq_question_access',],
            ['id' => 149, 'title' => 'faq_question_create',],
            ['id' => 150, 'title' => 'faq_question_edit',],
            ['id' => 151, 'title' => 'faq_question_view',],
            ['id' => 152, 'title' => 'faq_question_delete',],
            ['id' => 175, 'title' => 'basic_crm_create',],
            ['id' => 176, 'title' => 'basic_crm_edit',],
            ['id' => 177, 'title' => 'basic_crm_view',],
            ['id' => 178, 'title' => 'basic_crm_delete',],
            ['id' => 199, 'title' => 'message_access',],
            ['id' => 200, 'title' => 'message_create',],
            ['id' => 201, 'title' => 'message_edit',],
            ['id' => 202, 'title' => 'message_view',],
            ['id' => 203, 'title' => 'message_delete',],
            ['id' => 204, 'title' => 'status_access',],
            ['id' => 205, 'title' => 'status_create',],
            ['id' => 206, 'title' => 'status_edit',],
            ['id' => 207, 'title' => 'status_view',],
            ['id' => 208, 'title' => 'status_delete',],
            ['id' => 214, 'title' => 'project_access',],
            ['id' => 215, 'title' => 'project_create',],
            ['id' => 216, 'title' => 'project_edit',],
            ['id' => 217, 'title' => 'project_view',],
            ['id' => 218, 'title' => 'project_delete',],
            ['id' => 219, 'title' => 'meeting_access',],
            ['id' => 220, 'title' => 'meeting_create',],
            ['id' => 221, 'title' => 'meeting_edit',],
            ['id' => 222, 'title' => 'meeting_view',],
            ['id' => 223, 'title' => 'meeting_delete',],
            ['id' => 224, 'title' => 'provider_access',],
            ['id' => 225, 'title' => 'provider_create',],
            ['id' => 226, 'title' => 'provider_edit',],
            ['id' => 227, 'title' => 'provider_view',],
            ['id' => 228, 'title' => 'provider_delete',],
            ['id' => 229, 'title' => 'budget_access',],
            ['id' => 230, 'title' => 'budget_create',],
            ['id' => 231, 'title' => 'budget_edit',],
            ['id' => 232, 'title' => 'budget_view',],
            ['id' => 233, 'title' => 'budget_delete',],
            ['id' => 234, 'title' => 'invoice_management_access',],
            ['id' => 235, 'title' => 'category_access',],
            ['id' => 236, 'title' => 'category_create',],
            ['id' => 237, 'title' => 'category_edit',],
            ['id' => 238, 'title' => 'category_view',],
            ['id' => 239, 'title' => 'category_delete',],
            ['id' => 240, 'title' => 'contingency_access',],
            ['id' => 241, 'title' => 'contingency_create',],
            ['id' => 242, 'title' => 'contingency_edit',],
            ['id' => 243, 'title' => 'contingency_view',],
            ['id' => 244, 'title' => 'contingency_delete',],
            ['id' => 245, 'title' => 'expense_type_access',],
            ['id' => 246, 'title' => 'expense_type_create',],
            ['id' => 247, 'title' => 'expense_type_edit',],
            ['id' => 248, 'title' => 'expense_type_view',],
            ['id' => 249, 'title' => 'expense_type_delete',],
            ['id' => 250, 'title' => 'service_type_access',],
            ['id' => 251, 'title' => 'service_type_create',],
            ['id' => 252, 'title' => 'service_type_edit',],
            ['id' => 253, 'title' => 'service_type_view',],
            ['id' => 254, 'title' => 'service_type_delete',],
            ['id' => 255, 'title' => 'year_access',],
            ['id' => 256, 'title' => 'year_create',],
            ['id' => 257, 'title' => 'year_edit',],
            ['id' => 258, 'title' => 'year_view',],
            ['id' => 259, 'title' => 'year_delete',],
            ['id' => 260, 'title' => 'expense_access',],
            ['id' => 261, 'title' => 'expense_create',],
            ['id' => 262, 'title' => 'expense_edit',],
            ['id' => 263, 'title' => 'expense_view',],
            ['id' => 264, 'title' => 'expense_delete',],
            ['id' => 265, 'title' => 'internal_notification_access',],
            ['id' => 266, 'title' => 'internal_notification_create',],
            ['id' => 267, 'title' => 'internal_notification_edit',],
            ['id' => 268, 'title' => 'internal_notification_view',],
            ['id' => 269, 'title' => 'internal_notification_delete',],

        ];

        foreach ($items as $item) {
            \App\Permission::create($item);
        }
    }
}

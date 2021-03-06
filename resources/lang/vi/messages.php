<?php

return [
    'loading' => 'Đang tải...',
    'not_exist' => ':item không tồn tại.',
    'permission_denied' => 'Không có quyền hạn.',
    'no_record' => 'Không tìm thấy bản ghi nào!',
    'invalid_request' => 'Yêu cầu không hợp lệ.',
    'action_failed' => 'Hành động bị lỗi.',
    'home' => [
        'title' => ':appName - Dịch vụ chia sẻ kiến thức về lập trình miễn phí',
        'techblog' => 'Tech blog',
        'about' => 'Kiến thức mà bạn cần có để vươn lên, bạn sẽ tìm thấy ở Viblo.',
        'social_registered' => 'Chào mừng bạn đến với ' . Config::get('app.app_name') . '. Bạn sẽ nhanh chóng được chuyển tới trang chủ.',
        'user_activated' => 'Chào mừng bạn đến với ' . Config::get('app.app_name') . '. Tài khoản của bạn đã được kích hoạt, bạn sẽ nhanh chóng được chuyển tới trang đăng nhập.',
    ],
    'error' => 'Đã có lỗi xảy ra, bạn vui lòng thử lại sau.',
    'setting' => [
        'manager' => 'Cài đặt cho phép bạn thiết lập thông tin cá nhân, mật khẩu, và bảo mật',
        'setting' => 'Quyền riêng tư',
        'sb_viblo_setting' => 'Thiết lập dịch vụ',
        'index_title' => 'Quản lý cài đặt',
        'privacy_title' => 'Quyền riêng tư',
        'privacy_language' => 'Ngôn ngữ',
        'privacy_email' => 'Hòm thư',
        'privacy_social_accounts' => 'Mạng xã hội',
        'privacy_basic_profile' => 'Thông tin cơ bản',
        'privacy_occupation_information' => 'Nghề nghiệp',
        'privacy_receive_newsletter' => 'Thông báo từ hệ thống',
        'privacy_receive_comment_notification' => 'Thông báo khi có bình luận',
        'privacy_receive_mention_notification' => 'Thông báo khi có người nhắc đến',
        'privacy_receive_follow_notification' => 'Thông báo khi có người theo dõi',
        'privacy_receive_stock_notification' => 'Thông báo khi bài được ghim',
        'privacy_receive_mail_notification' => 'Thông báo khi có mail',
        'privacy_receive_monthly_magazine' => 'Thông báo khi có tạp chí hàng tháng',
        'privacy_receive_weekly_magazine' => 'Thông báo khi có tạp chí hàng tuần',
        'privacy_receive_other_mail' => 'Thông báo khi có tin khác',
        'social_login_title' => 'Cài đặt đăng nhập',
        'update_success' => 'Các thay đổi đã được lưu thành công.',
        'update_notification_success' => 'Các thay đổi đã được lưu thành công.',
        'update_viblo_setting_success' => 'Các thay đổi đã được lưu thành công.',
        'user_theme' => 'Phông của trình soạn thảo',
        'post_language' => 'Bạn muốn xem bài viết thuộc ngôn ngữ nào?',
        'language_update_success' => 'Thiết lập ngôn ngữ thành công.',
        'default_post_language' => 'Bạn muốn viết bài bằng ngôn ngữ nào?',
        'system_language' => 'Ngôn ngữ hệ thống',
        'select_language' => '-- Ngôn ngữ bài viết --',
        'top_page_language' => 'Ngôn ngữ trang chủ đề',
    ],
    'role' => [
        'privilege_title' => 'Thiết lập quyền',
        'member' => 'Thành viên',
        'moderator' => 'Moderator',
        'admin' => 'Admin',
        'change_title' => 'Đổi vai trò',
        'search_hint' => 'Nhập tên hoặc tên đăng nhập để tìm kiếm',
        'no_user' => 'Không tìm thấy thành viên có tên <b>:name</b>.',
        'user_id' => 'ID',
        'user_name' => 'Tên',
        'user_username' => 'Tên đăng nhập',
        'user_role' => 'Vai trò',
        'confirm_change' => 'Xác nhận đổi vai trò của thành viên :username?',
        'not_change' => 'Đã có lỗi xảy ra, vui lòng thử lại.',
        'change_fail' => 'Cần có ít nhất 1 admin nữa.',
        'change_success' => 'Đổi vai trò thành công.',
    ],
    'server' => [
        'deploy_title' => 'Deploy ứng dụng',
        'deploy_environment' => 'Môi trường',
        'deploy_branch' => 'Nhánh',
        'deploy_checkout_only' => 'Chỉ checkout',
        'deploy_migrate' => 'Migrate',
        'deploy_migrate_normal' => 'Bình thường',
        'deploy_migrate_seed' => 'Với Seed',
        'deploy_migrate_refresh' => 'Với Refresh & Seed',
        'deploy_no_migrate' => 'Không',
        'composer_update' => 'Composer update',
        'deploy_error' => 'Có lỗi xảy ra khi deploy ứng dụng, vui lòng thử lại.',
        'deploy_success' => 'Ứng dụng đã được deploy với đầu ra:',
        'deploy_invalid_input' => 'Đầu vào không hợp lệ.',
    ],
    'search' => [
        'index' => 'Kết quả tìm kiếm cho :keyword | ' . Config::get('app.app_name'),
        'index_title' => 'Kết quả tìm kiếm',
        'quicksearch_post' => 'Bài viết',
        'quicksearch_user' => 'Thành viên',
        'quicksearch_footer' => 'Xem thêm',
        'invalid_keyword' => 'Hãy nhập vào 1 từ khóa',
        'no_result' => 'Không tìm thấy kết quả cho từ khóa <b>:keyword</b>.',
        'found' => '{1}Có khoảng <b>:total</b> kết quả tìm kiếm cho <b>:keyword</b>|[2,Inf]Có khoảng <b>:total</b> kết quả tìm kiếm cho <b>:keyword</b>.',
        'keyword' => 'Từ khóa',
        'keyword_placeholder' => 'Điền từ khóa',
        'type' => 'Thể loại',
        'type_post' => 'Bài viết',
        'type_user' => 'Thành viên',
    ],
    'profile' => [
        'update_title' => 'Hồ sơ công khai',
        'update' => 'Hồ sơ công khai',
        'name' => 'Tên',
        'fullname' => 'Tên đầy đủ',
        'location' => 'Vị trí',
        'url' => 'Đường dẫn',
        'email' => 'Hòm thư',
        'organization' => 'Tổ chức',
        'occupation' => 'Nghề nghiệp',
        'description' => 'Mô tả',
        'firstname_placeholder' => 'Tên',
        'lastname_placeholder' => 'Họ',
        'location_placeholder' => 'Địa chỉ cụ thể',
        'url_placeholder' => 'https://www.facebook.com/viblo.asia/?fref=ts',
        'organization_placeholder' => 'Framgia Inc',
        'occupation_placeholder' => 'Lập trình viên, kĩ sư mạng...',
        'description_placeholder' => 'Không nhập quá 500 kí tự',
        'update_success' => 'Hồ sơ được cập nhật thành công.',
        'update_fail' => 'Hồ sơ chưa được cập nhật, vui lòng thử lại.',
        'avatar' => 'Hình đại diện',
        'change_avatar' => ' (Ấn thay)',
        'public' => 'Công khai',
        'private' => 'Riêng tư',
        'connected' => 'Đã kết nối',
        'revoke' => 'Thu hồi',
        'connect' => 'Kết nối',
        'disconnected' => 'Không kết nối',
        'warning_change_email' => 'Chúng tôi sẽ gửi thư xác minh đến địa chỉ hòm thư mới của bạn. Trong vòng 24 giờ tới, vui lòng ấn vào đường dẫn bên trong thư đó để hoàn tất việc xác minh.',
        'warning_change_email_1' => 'Bạn có chắc là bạn muốn thay đổi hòm thư cá nhân?',
        'warning_change_work_email' => 'Chúng tôi sẽ gửi thư xác minh đến địa chỉ hòm thư công việc mới của bạn. Trong vòng 24 giờ tới, vui lòng ấn vào đường dẫn bên trong thư đó để hoàn tất việc xác minh.',
        'warning_change_work_email_1' => 'Bạn có chắc mình muốn thay đổi hòm thư công việc?',
        'warning_change_both_emails' => 'Chúng tôi sẽ gửi thư xác minh đến địa chỉ hòm thư mới của bạn. Trong vòng 24 giờ tới, vui lòng ấn vào đường dẫn bên trong thư đó để hoàn tất việc xác minh.',
        'change_work_email' => '<br>Chúng tôi sẽ gửi thư xác minh đến địa chỉ hòm thư mới của bạn. Trong vòng 24 giờ tới, vui lòng ấn vào đường dẫn bên trong thư đó để hoàn tất việc xác minh.',
        'change_private_email' => '<br>Chúng tôi sẽ gửi thư xác minh đến địa chỉ hòm thư mới của bạn. Trong vòng 24 giờ tới, vui lòng ấn vào đường dẫn bên trong thư đó để hoàn tất việc xác minh.',
        'change_private_email_1' => '<br>Hòm thư cá nhân đã được thay đổi thành công.',
        'change_work_email_1' => '<br>Hòm thư công việc đã được thay đổi thành công.',
        'empty_private_work_email' => 'Thông tin địa chỉ hòm thư công việc (cá nhân) vẫn chưa được điền. Vẫn tiếp tục cập nhật hồ sơ của bạn?',
        'warning_remove_work_email' => 'Bạn có chắc chắn loại bỏ địa hòm thư công việc của bạn?',
        'warning_remove_private_email' => 'Bạn có chắc chắn loại bỏ hòm thư cá nhân của bạn?',
        'warning_remove_both_emails' => 'Bạn có chắc chắn loại bỏ tất cả hòm thư của bạn?',
        'title_confirm' => 'Bạn có chắc?',
    ],
    'skill' => [
        'name' => 'Tên',
        'name_placeholder' => 'PHP, Java, Objective-C...',
        'year' => 'Số năm',
        'name.between' => 'Kỹ năng :attribute phải có từ :min tới :max ký tự.',
        'required' => 'Yêu cầu điền kỹ năng :attribute.',
        'skill_settings' => 'Thiết lập kĩ năng',
        'warning_message' => 'Bạn có chắc mình muốn xóa kỹ năng này?',
        'warning_title' => 'Cảnh báo',
        'warning_confirm' => 'Đúng vậy',
        'skill_exist' => 'kỹ năng đã tồn tại!',
    ],
    'user_skill' => [
        'category_blank' => 'Chuyên mục không được phép để trống.',
        'skill_blank' => 'Kĩ năng không được phép để trống.',
        'category_skill_exist' => 'Chuyên mục đã tồn tại !'
    ],
    'user' => [
        'index_title' => 'Thành viên',
        'signup_title' => 'Đăng kí',
        'login_title' => 'Đăng nhập',
        'confirm_title' => 'Xác nhận tài khoản',
        'update_title' => 'Cập nhật thông tin người dùng',
        'change_password_title' => 'Đổi mật khẩu',
        'name' => 'Tên',
        'username' => 'Tên đăng nhập',
        'email' => 'Hòm thư cá nhân',
        'work_email' => 'Hòm thư công việc',
        'phone' => 'Số điện thoại',
        'password' => 'Mật khẩu',
        'password_confirmation' => 'Xác nhận mật khẩu',
        'current_password' => 'Mật khẩu hiện tại',
        'new_password' => 'Mật khẩu mới',
        'new_password_confirmation' => 'Xác nhận mật khẩu',
        'name_placeholder' => 'Tên của bạn',
        'username_placeholder' => 'Tên đăng nhập',
        'email_placeholder' => 'Địa chỉ email',
        'phone_placeholder' => 'Số điện thoại',
        'password_placeholder' => 'Mật khẩu',
        'password_confirmation_placeholder' => 'Xác nhận mật khẩu',
        'current_password_placeholder' => 'Mật khẩu hiện tại',
        'new_password_placeholder' => 'Mật khẩu mới',
        'new_password_confirmation_placeholder' => 'Nhập lại mật khẩu mới',
        'signup_success' => 'Bạn đã đăng ký thành công. Vui lòng kiểm tra thư được gửi đến địa chỉ hòm thư bạn vừa cung cấp để kích hoạt tài khoản.',
        'email_confirm_sent' => 'Thư đã được gửi.',
        'invalid_confirm' => 'Địa chỉ hòm thư hoặc mã kích hoạt không hợp lệ, hoặc tài khoản của bạn đã được kích hoạt từ trước.',
        'email_confirm_subject' => 'Kích hoạt tài khoản của bạn trên :app_name',
        'active_notice' => 'Bạn cần chứng thực địa chỉ hòm thư này trước khi sử dụng, yêu cầu hệ thống gửi lại email chứng thực một lần nữa?',
        'incorrect_login_info' => 'Tên đăng nhập hoặc mật khẩu không đúng.',
        'incorrect_password' => 'Mật khẩu không đúng.',
        'update_success' => 'Thông tin người dùng đã được thay đổi thành công.',
        'update_fail' => 'Thông tin người dùng chưa được thay đổi, vui lòng thử lại.',
        'email_password_subject' => 'Mật khẩu đã được thay đổi.',
        'email_password_header' => 'Thay đổi mật khẩu',
        'email_password_greeting' => 'Gửi :name,',
        'email_password_content' => 'Thư này được gửi để thông báo rằng mật khẩu của bạn đã được thay đổi thành công vào lúc :updatedAt.',
        'change_password_success' => 'Mật khẩu của bạn đã được thay đổi.',
        'change_password_fail' => 'Mật khẩu chưa được thay đổi, vui lòng thử lại.',
        'incorrect_current_password' => 'Mật khẩu hiện tại không đúng.',
        'following_title' => 'Người :name đang theo dõi',
        'following_nav' => 'Đang theo dõi',
        'followers_title' => 'Người theo dõi :name',
        'followers_nav' => 'Người theo dõi',
        'following_categories_title' => 'Chuyên mục :name đang theo dõi',
        'following_categories_nav' => 'Chuyên mục',
        'user_posts_title' => 'Bài viết của :name',
        'user_posts_nav' => 'Bài viết gần đây',
        'user_stocked_title' => 'Bài viết :name đã ghim',
        'user_stocked_nav' => 'Bài viết đã ghim',
        'manage_title' => 'Quản lý người dùng',
        'show_all' => 'Hiện tất cả',
        'search_hint' => 'Nhập tên hoặc tên đăng nhập để tìm kiếm',
        'confirm_delete' => "Bạn có chắc mình muốn xóa thành viên ':username'?",
        'confirm_restore' => "Bạn có chắc mình muốn phục hồi thành viên ':username'?",
        'confirm_active' => "Bạn có chắc mình muốn kích hoạt tài khoản ':username'?",
        'confirm_unBan' => "Bạn có chắc mình muốn bỏ khóa thành viên ':username'?",
        'not_exist' => 'Thành viên #:item không tồn tại.',
        'has_deleted' => 'Thành viên :item đã bị xóa.',
        'has_restored' => 'Thành viên :item đã được hồi phục.',
        'has_unban' => 'Thành viên :item đã được bỏ khóa.',
        'undifined' => 'NULL',
        'no_user' => 'Không có thành viên nào.',
        'title_confirm' => 'Bạn có chắc?',
        'success' => 'Thành công.',
        'fail' => 'Thất bại.',
        'done' => 'Xong',
        'not_stock' => 'Chưa có bài viết nào được ghim.',
        'not_post' => 'Chưa có bài viết nào.',
        'signup_here' => 'Đăng ký',
        'terms' => 'Điều khoản dịch vụ',
        'confirm_unban' => 'Bỏ khóa',
        'user_is_ban' => 'Đã khóa thành viên.',
        'manage_statistic_title' => 'Thống kê người dùng',
        'total_user' => 'Tổng số: ',
        'deleted_user' => 'Bị xóa: ',
        'blocked_user' => 'Bị khóa: ',
        'not_activated_user' => 'Chưa kích hoạt: ',
        'statistic' => 'Thống kê',
        'number_users' => 'Số lượng',
        'actived' => 'Đã kích hoạt',
        'deleted' => 'Bị xóa',
        'banned' => 'Bị khóa',
        'not_active' => 'Tài khoản chưa kích hoạt',
        'total' => 'Tổng số',
        'by_month' => 'Thống kê theo tháng',
        'view_day' => 'Tổng số người đăng ký theo ngày trong ',
        'day' => 'Ngày',
        'deleted' => 'Bị xóa',
        'view_week' => 'Tổng số người đăng ký theo tuần trong ',
        'by_week' => 'Thống kê theo tuần',
        'by_day' => 'Thống kê theo ngày và tháng',
        'week' => 'Tuần',
        'weeks' => 'Tuần',
        'start_week' => 'Từ ngày',
        'end_week' => 'Tới ngày',
        'no_data' => 'Không có dữ liệu để hiển thị.',
        'confirm_email' => 'Xác nhận hòm thư',
        'not_email' => 'Mail nhập sai',
        'exist_work_email' => 'Hòm thư công việc này đã được sử dụng.',
        'filter_all' => 'Tất cả',
        'filter_framgia' => 'Framgia',
        'filter_others' => 'Khác',
        'reset_password_title' => 'Đặt lại mật khẩu',
        'reset_password_message' => 'Điền vào mẫu dưới đây để đặt lại mật khẩu',
        'reset_password_expire' => 'Liên kết này sẽ hết hiệu lực sau :time phút.',
        'user_not_found' => 'Không tìm thấy tài khoản người dùng.',
        'user_access_account' => 'Chào <b>:name</b>, :client muốn truy cập vào tài khoản Viblo của bạn.',
        'use_basic_profile' => 'Sử dụng thông tin cá nhân của bạn',
        'access_your_group' => 'Truy cập vào các nhóm của bạn',
        'login_viblo_account' => 'Đăng nhập với tài khoản Viblo',
        'you_logged_in' => 'Bạn đã đăng nhập',
        'user_not_exists' => 'Người dùng :username hoặc hòm thư :email không tồn tại.',
        'agree_with_terms' => 'Bạn cần đồng ý với điều khoản sử dụng của Viblo',
        'admin_change_lang_confirm' => 'Bạn có chắc muốn chuyển ngôn ngữ viết bài mặc định của người dùng này không?',
        'admin_change_lang_success' => 'Ngôn ngữ viết bài mặc định đã được thay đổi.',
        'admin_change_lang_fail' => 'Không thể thay đổi đối với người dùng này.',
        'active_work_email_notice' => 'Bạn cần chứng thực địa chỉ hòm thư này trước khi sử dụng, yêu cầu hệ thống gửi lại mail chứng thực một lần nữa?',
        'email_confirm_subject_en' => 'Activate your account on :app_name',
        'email_confirm_subject_ja' => ':app_nameに登録したメールアドレスを認証してください.',
        'email_confirm_subject_vi' => 'Kích hoạt tài khoản của bạn trên :app_name',
    ],
    'post' => [
        'enter_categories' => 'Nhập chuyên mục',
        'posted' => 'Đã đăng',
        'edit' => 'Chỉnh sửa bài',
        'deleted_success' => ':text đã được xóa.',
        'max_drafts_error' => 'Bạn không thể tạo bài viết mới vì bạn đã có quá nhiều bản nháp.',
        'delete_confirm' => 'Bạn có chắc mình muốn xóa không?',
        'report' => 'Báo vi phạm',
        'delete' => 'Xóa bài',
        'message_warning' => 'Không có bài nào được ghim tuần trước.',
        'enter_thumbnail' => 'Nhập đường dẫn thumbnail',
        'first_stock' => 'trở thành người đầu tiên ghim bài viết này.',
        'stocked_by' => 'được ghim bởi',
        'and_other' => 'và những người khác',
        'blogger' => 'blogger',
        'unpublished_confirm' => 'Bạn có chắc mình muốn chuyển bài viết này thành bản nháp?',
        'unpublished_success' => 'Bài viết đã chuyển thành bản nháp.',
        'manage_statistic_title' => 'Thống kê bài viết',
        'total_post' => 'Tổng số bài: ',
        'published_post' => 'Đã đăng: ',
        'stocked_post' => 'Đã được ghim: ',
        'manage_title' => 'Quản lý bài viết',
        'title_confirm' => 'Bạn có chắc?',
        'success' => 'Thành công.',
        'search_hint' => 'Tìm kiếm...',
        'byPost' => 'Theo tên bài',
        'byCategory' => 'Theo chuyên mục',
        'no_post' => 'Không tìm thấy bài nào.',
        'choose' => '-- Chọn kiểu kết quả --',
        'search_result' => 'Kết quả tìm kiếm cho  ',
        'show_all' => 'Hiện tất cả bài viết',
        'statistic' => 'Thống kê bài viết',
        'published' => 'Đã đăng',
        'draft' => 'Bản nháp',
        'deleted' => 'Đã xóa',
        'total_posts' => 'Tổng số',
        'total' => 'Tổng số',
        'number_posts' => 'Số lượng',
        'by_month' => 'Thống kê theo tháng',
        'day' => 'Ngày',
        'view_day' => 'Tổng số bài theo ngày trong ',
        'clips' => 'Số lượt ghim',
        'posts_clip' => 'Bài đã ghim',
        'by_week' => 'Thống kê theo tuần',
        'week' => 'Tuần',
        'weeks' => 'Tuần',
        'start_day' => 'Từ ngày',
        'end_day' => 'Đến ngày',
        'drafts' => 'Bản nháp',
        'view_week' => 'Tổng số bài theo tuần trong năm ',
        'no_data' => 'Không có dữ liệu hoặc không có bài viết',
        'deleted_drafts' => 'Bản nháp đã xóa',
        'deleted_published' => 'Bài đăng đã xóa',
        'filter_all' => 'Tất cả',
        'filter_framgia' => 'Framgia',
        'filter_others' => 'Khác',
        'filter_result' => 'Lọc kết quả:',
        'posts_list' => 'Danh sách bài',
        'confirm_change_post_lang' => 'Bạn có chắc muốn thay đổi ngôn ngữ bài viết này?',
        'change_post_lang_success' => 'Đã thay đổi ngôn ngữ.',
        'change_post_lang_fail' => 'Không thể thay đổi bài viết này.',
    ],

    'report' => [
        'index_title' => 'Quản lý báo vi phạm',
        'box_title' => 'Lí do vi phạm',
        'box_header' => 'Tại sao bạn cho rằng bài này vi phạm?',
        'spam' => 'Đây là bài rác.',
        'illegal_content' => 'Nội dung bài viết không hợp lệ.',
        'harassment' => 'Nội dung có mục đích quấy rối.',
        'error_validate' => 'Đầu vào không hợp lệ.',
        'error_created' => 'Báo cáo vi phạm đã được gửi.',
        'create_success' => 'Cảm ơn bạn đã báo cáo.',
        'filter' => 'Lọc',
        'batch_proccess' => 'Xử lý hàng loạt',
        'all' => 'Tất cả',
        'unread' => 'Chưa đọc',
        'read' => 'Đã đọc',
        'resolved' => 'Đã giải quyết',
        'resolve' => 'Giải quyết',
        'delete' => 'Xóa',
        'no_report' => 'Không có báo cáo nào.',
        'select' => 'Lựa chọn',
        'reporter' => 'Người báo',
        'post' => 'Bài viết',
        'type' => 'Thể loại',
        'status' => 'Trạng thái',
        'action' => 'Hành động',
        'type_spam' => 'Rác',
        'type_illegal_content' => 'Không hợp lệ',
        'type_harassment' => 'Quấy rối',
        'confirm_delete' => 'Bạn có chắc mình muốn xóa báo cáo có id là #:id?',
        'deleted_success' => 'Báo cáo có id #:id đã được xóa.',
        'deleted_fail' => 'Báo cáo có id #:id chưa được xóa, vui lòng thử lại.',
        'processing_invalid' => 'Hãy chọn ít nhất 1 bản ghi để xử lí.',
        'processing_completed' => 'Quá trình xử lý hoàn thành.',
        'processing_failed' => 'Xử lý thất bại.',
        'post_been_deleted' => 'Bài viết này đã bị xóa.',
    ],

    'image' => [
        'upload_error' => 'Lỗi xảy ra khi tải ảnh lên. Bạn có thể đã đạt đến giới hạn được tải lên!',
        'invalid_file_size' => 'Dung lượng ảnh không được lớn hơn ',
        'manager_title' => 'Quản lý hình ảnh',
        'confirm_delete' => 'Bạn có chắc mình muốn xóa \':name\'?',
        'confirm_delete_social' => 'Bạn có chắc mình muốn xóa ảnh này?',
        'no_image' => 'Không có hình ảnh nào.',
        'title_confirm' => 'Bạn có chắc?',
        'success' => 'Thành công.',
        'fail' => 'Thất bại.',
        'not_exist' => 'Hình ảnh có id là #:id không tồn tại.',
        'not_exist_social' => 'Hình ảnh không tồn tại.',
        'has_deleted' => 'Hình ảnh \':name\' đã bị xóa.',
        'has_deleted_social' => 'Hình ảnh đã bị xóa.',
    ],

    'category' => [
        'follow' => 'Theo dõi',
        'following' => 'Đang theo dõi',
        'unfollow' => 'Bỏ theo dõi',
        'create_title' => 'Tạo chuyên mục',
        'enter_name' => 'Tên chuyên mục',
        'create_success' => 'Tạo chuyên mục mới thành công.',
        'manage_title' => 'Quản lý chuyên mục',
        'edit_title' => 'Chỉnh sửa chuyên mục :name',
        'edit_success' => 'Thay đổi đã được lưu.',
        'nothing_edited' => 'Ít nhất cần có 1 thay đổi để cập nhật.',
        'confirm_delete' => "Bạn có chắc mình muốn xóa chuyên mục ':name'?",
        'confirm_restore' => "Bạn có chắc mình muốn khôi phục chuyên mục ':name' ?",
        'confirm_filter' => "Bạn có chắc mình muốn thêm chuyên mục ':name' vào danh sách lọc?",
        'confirm_unfilter' => "Bạn có chắc mình muốn loại bỏ chuyên mục ':name' khỏi danh sách lọc?",
        'has_deleted' => 'Chuyên mục :item đã được xóa.',
        'has_restored' => 'Chuyên mục :item đã được phục hồi.',
        'has_filtered' => 'Chuyên mục :item đã được thêm vào danh sách lọc.',
        'has_unfiltered' => 'Chuyên mục :item đã được loại bỏ khỏi danh sách lọc.',
        'not_exist' => 'Chuyên mục #:item không tồn tại.',
        'filter_not_exist' => 'Chuyên mục #:item không tồn tại trong danh sách lọc.',
        'show_title' => ':name',
        'count_posts' => 'bài viết',
        'count_followers' => 'người theo dõi',
        'search_hint' => 'Điền tên hoặc tên rút gọn để tìm kiếm',
        'show_all' => 'Hiển thị mọi chuyên mục',
        'message_warning' => 'Không có bài nào được ghim trong chuyên mục này tuần trước.',
        'request_success' => 'Yêu cầu đã được gửi.',
        'confirm_accept' => "Bạn có chắc mình muốn chấp nhận chuyên mục ':name'?",
        'confirm_reject' => "Bạn có chắc mình muốn từ chối chuyên mục ':name'?",
        'accepted' => 'Chuyên mục mới đã được thêm.',
        'rejected' => 'Chuyên mục mới đã bị từ chối.',
        'not_accept' => 'Không thể thêm chuyên mục này, vui lòng thử lại.',
        'not_reject' => 'Không thể từ chối chuyên mục này, vui lòng thử lại.',
        'request_list' => 'Quản lý chuyên mục yêu cầu',
        'name_example' => 'JavaScript, ShellScript,...',
        'short_name_example' => 'js, shell,...',
        'import_success' => 'Đã nhập :total chủ đề thành công.',
        'import_error' => 'Nhập chủ đề bị lỗi. Hãy thử lại.',
        'import_not_file' => 'Không có tập tin được chọn.',
        'import_not_csv' => 'Tập tin nhập phải có định dạng * .csv',
        'import_not_size' => 'Tập tin được nhập tối đa là :size kB',
        'export_success' => 'Xuất danh sách chủ đề thành công.',
        'export_category_link' => 'Nhấn vào đây để tải về tập tin csv',
    ],

    'notification' => [
        'follow' => ':sender đang theo dõi bạn.',
        'stock' => ':sender đã ghim bài viết :link của bạn.',
        'comment' => ':sender đã bình luận trong bài viết :link của bạn.',
        'mention' => ':sender đã nhắc đến bạn trong bài viết :link.',
        'null' => 'Không có thông báo nào.',
        'has_followed_you' => ':username đang theo dõi bạn.',
        'has_stocked' => ':username đã ghim bài viết ":post".',
        'has_posted_a_comment' => ':username đã đăng bình luận trong bài viết ":post".',
        'has_mentioned_in_a_comment' => ':username đã nhắc đến bạn trong bình luận của bài viết ":post".',
        'has_mentioned_in_a_post' => ':username đã nhắc đến bạn trong bài viết ":post".',
        'title' => 'Thiết lập thông báo',
        'notify_header' => 'Thông báo',
        'notify_setting' => 'Cài đặt',
        'notify_time' => 'Thời gian',
        'see_all' => 'Xem hết',
        'post' => ':post - tác giả :author',
        'mail_subject_notify' => 'Bạn có 1 thông báo.',
        'mail_subject_top_posts' => 'Bài được ghim nhiều nhất tuần trước',
        'mail_no_received' => 'Nếu bạn không muốn nhận thêm thư tương tự, vui lòng nhấp vào liên kết sau và thay đổi các thiết lập.',
        'your_notifications' => 'Thông báo của bạn',
        'today' => 'Hôm nay',
        'yesterday' => 'Hôm qua',
        'mail_subject_notify_admin' => 'Tin mới từ Viblo',
        'mail_subject_magazine_weekly' => 'Tạp chí hàng tuần từ Viblo',
        'mail_subject_magazine_monthly' => 'Tạp chí hàng tháng từ Viblo',
        'mail_subject_magazine_no_post' => 'Hãy viết bài trên Viblo',
        'admin_feedback' => 'Có góp ý mới cho Viblo, :click_here để kiểm tra.',
        'admin_report' => 'Có báo cáo vi phạm trên Viblo, :click_here để kiểm tra.',
        'admin_request' => 'Có yêu cầu tạo chuyên mục mới trên Viblo, :click_here để kiểm tra.',
        'click_here' => 'ấn vào đây',
        'has_added_to_group' => ':sender đã thêm bạn vào nhóm :group.',
        'added_to_group' => ':sender đã thêm bạn vào nhóm :link.',
        'post_group_need_approval' => ':sender đã đăng bài trong nhóm :group, ấn vào đây để duyệt bài.',
        'new_post_group_need_approval' => ':sender đã đăng bài trong nhóm :link, ấn vào đây để duyệt bài.',
        'member_group_need_approval' => ':sender đã gửi yêu cầu tham gia nhóm :group, ấn vào đây để duyệt thành viên.',
        'new_member_group_need_approval' => ':sender đã gửi yêu cầu tham gia nhóm :link, ấn vào đây để duyệt thành viên.',
        'no_post_request' => 'Không có yêu cầu đăng bài trong nhóm :link.',
        'no_member_request' => 'Không có yêu cầu tham gia nhóm :link.',
        'request_acceppted' => 'Yêu cầu đã được chấp nhận.',
        'request_deny' => 'Yêu cầu đã bị từ chối.',
        'post_approved' => 'Bài viết đã được duyệt.',
        'post_deny' => 'Bài viết đã bị từ chối.',
        'no_notify' => 'Thông báo không tồn tại.',
        'no_permission' => 'Không tìm thấy nhóm hoặc người dùng không có quyền admin.',
        'has_posted_in_group' => ':username đã đăng bài mới trong nhóm :group.',
        'new_post_in_group' => ':sender đã đăng bài viết mới trong nhóm :link',
        'posted_in_group' => ':sender đã đăng bài viết :post trong nhóm :link.',
        'has_a_report' => ':username đã báo cáo bài viết :post là :type.',
        'reported_post' => ':sender đã báo cáo bài viết :link.',
        'has_reported_post' => ':sender đã báo cáo bài viết :post.',
        'has_a_feedback' => ':username vừa gửi một thư góp ý.',
        'has_send_feedback' => ':sender vừa gửi một thư góp ý.',
        'had_feedback' => ':sender vừa gửi :feedback.',
        'report_from' => 'Báo cáo từ :user',
        'feedback_from' => 'Góp ý từ :user',
        'following_post' => ':username vừa đăng bài viết :post.',
        'following_has_posted' => ':sender đã đăng bài viết :link.',
        'following_posted' => ':sender đã đăng bài viết :link.',
        'cant_not_get_fb_share_acc' => 'Không thể lấy số chia sẻ trên Facebook, vui lòng thử lại.',
        'cant_not_get_twt_share_acc' => 'Không thể lấy số chia sẻ trên Twitter, vui lòng thử lại.',
        'empty_url_or_provider' => 'Đường dẫn hoặc nhà cung cấp đang bị trống.',
        'system_backup_mail_subject' => 'Dung lượng 1 lần backup đã vượt quá 10 GB',
        'system_backup_mail_content' => "Gửi người quản lí Viblo,\n\nHiện nay, dung lượng của 1 lần backup dữ liệu đã vượt quá 10 GB. Đây có thể sẽ gây ra các vấn đề nghiêm trọng nên mong bạn hãy tìm cách giải quyết",
    ],

    'comment' => [
        'delete_confirm_message' => 'Bạn có chắc mình muốn xóa bình luận này?',
        'delete_confirm_title' => 'Xác nhận xóa',
        'delete_confirm_confirm' => 'Đúng vậy',
    ],

    'send_mail' => [
        'title_1' => 'Chào mừng bạn đến với :appName!',
        'title_2' => 'Xin chào :username,',
        'header' => 'Cám ơn bạn đã đăng ký.<br>Để kích hoạt tài khoản, vui lòng xác minh địa chỉ hòm thư của bạn bằng cách nhấn vào liên kết dưới đây.',
        'change_mail_header_1' => 'Địa chỉ hòm thư của bạn đã được thay đổi.',
        'change_mail_header_2' => 'Vui lòng kích hoạt bằng cách nhấn vào liên kết dưới đây.',
        'app_desc_1' => 'Dịch vụ chia sẻ kiến thức về lập trình miễn phí',
        'confirm' => 'Xác minh địa chỉ email',
        'app_desc_2' => 'Kiến thức mà bạn cần có để vươn lên, bạn sẽ tìm thấy ở Viblo.<br>Ruby on Rails / PHP / Swift / Unity / Java / .Net / etc...',
        'viblo_team' => 'Viblo team',
        'say_bye' => 'Rất mong bạn sẽ hài lòng với dịch vụ của chúng tôi.',
        'company' => 'Framgia, Inc.',
        'your_password' => 'Mật khẩu: :password',
        'your_username' => 'Tên đăng nhập: :username',
        'add_work_email_header_1' => 'Địa chỉ hòm thư công việc của bạn đã được thay đổi.',
        'add_work_email_header_2' => 'Vui lòng kích hoạt bằng cách nhấn vào liên kết dưới đây.',
    ],

    'login' => [
        'social_notice' => 'Đăng kí hoặc đăng nhập nhanh bằng cách sử dụng tài khoản mạng xã hội của bạn.',
    ],

    'sb_viblo_setting' => [
        'title' => 'Thiết lập dịch vụ',
    ],
    'detect_language' => [
        'please_select' => 'Hãy chọn ngôn ngữ',
    ],
    'vote' => [
        'question' => 'Bạn có nghĩ rằng bài viết này hữu ích?',
        'error' => 'Đã có lỗi xảy ra.',
        'login_warning' => 'Trước hết bạn cần đăng nhập.',
        'tks_feedback' => 'Cảm ơn bạn đã góp ý.',
        'yes' => 'Có',
        'no' => 'Không',
        'voted_helpful' => 'Bạn đánh giá bài viết này hữu ích',
        'voted_not_helpful' => 'Bạn đánh giá bài này không hữu ích',
        'not_helpful_warning' => 'Nhiều người đánh giá bài này không hữu ích',
        'already_warning' => 'Bạn đã đánh giá bài viết này rồi',
    ],
    'all_languages_selected' => 'Bài viết từ mọi ngôn ngữ sẽ được hiển thị <br/>',
    'theme' => [
        'created_warning' => 'Chủ đề của tháng này đã được tạo rồi.',
        'not_create_warning' => 'Chủ đề của tháng này chưa được tạo/.',
        'empty_subject_name' => 'Tên chủ đề không được trống.',
        'empty_url' => 'Professionals: đường dẫn phải liên kiết tới bài viết có tồn tại.',
        'empty_professional' => 'Professionals: đường dẫn phải liên kiết tới bài viết có tồn tại.',
        'empty_theme_this_month' => 'Chủ đề của tháng không được để trống.',
        'error_thumb_img' => 'Ảnh chủ đề phải có định dạng :type và dung lượng tối đa :size kB.',
        'save_success' => 'Đã lưu.',
        'select_theme_subject' => 'Chủ đề chính',
        'select_theme_in_month' => 'Chủ đề con',
        'can_not_update_some_field' => 'Đã có lỗi, không thể cập nhật.',
        'duplicate_theme_name_vi' => 'Chủ đề tiếng Việt bị trùng lặp.',
        'duplicate_theme_name_en' => 'Chủ đề tiếng Anh bị trùng lặp.',
        'no_theme' => 'Tháng này chưa có chủ đề.',
    ],
    'feedback' => [
        'error' => 'Xin lỗi, góp ý của bạn không được gửi. Xin vui lòng thử lại sau.',
        'success' => 'Chân thành cám ơn góp ý của bạn.',
    ],
    'group' => [
        'save_success' => 'Đã lưu thành công.',
        'not_save' => 'Không thể tạo nhóm, vui lòng thử lại.',
        'not_update' => 'Không thể cập nhật nhóm, vui lòng thử lại.',
        'join_group_notice' => ':join<b>:group</b>',
        'join_group' => 'Tham gia nhóm',
        'empty_group_name' => 'Tên nhóm không được trống.',
        'empty_group_shortname' => 'Tên nhóm rút gọn không được trống.',
        'duplicate_group_shortname' => 'Tên nhóm rút gọn đã tồn tại.',
        'error' => 'Đã có lỗi xảy ra.',
        'not_exist_group' => 'Không thể tìm thấy nhóm hoặc người dùng chưa được admin chấp nhận.',
        'not_exist_post' => 'Không tìm thấy bài viết.',
        'join_group_notice_title' => 'Thành viên ngoài nhóm không xem được bài viết này.',
        'search_result' => 'Kết quả tìm kiếm: ',
        'not_found' => 'Không tìm thấy.',
        'available' => 'Đường dẫn này có thể sử dụng.',
        'unavailable' => 'Đường dẫn này không thể sử dụng.',
        'error_group_shortname' => 'URL nhóm đang trống hoặc đã được người khác sử dụng.',
        'invalid_group_shortname' => 'Chỉ được sử dụng [a-z], [A-Z], [0-9], [-], [.], [_], các ký tự khác sẽ bị loại bỏ.',
        'not_admin_permission' => 'Chưa được admin chấp nhận.',
        'waiting_admin_permission' => 'Chờ admin chấp nhận.',
        'cancel_request_success' => 'Đã huỷ yêu cầu.',
        'url_not_empty' => 'Tiêu đề bài tổng hợp và đường dẫn không được trống.',
        'request_processed' => 'Yêu cầu đã được xử lý.',
        'request_made_success' => 'Yêu cầu của bạn đã được gửi đi.',
        'add_member_success' => 'Đã thêm thành viên mới!',
        'add_member_fail' => 'Không thêm được!',
        'confirm_remove_member' => 'Bạn có muốn xóa thành viên này không?',
        'confirm_change_role' => 'Bạn có muốn thay đổi quyền hạn của thành viên này không?',
        'can_not_remove' => 'Không thể xóa thành viên này.',
        'can_not_change_role' => 'Không thể thay đổi quyền hạn của thành viên này.',
        'remove_member_success' => 'Thành viên đã được xóa',
        'change_role_success' => 'Thành viên đã được thay đổi quyền hạn',
        'notice_link_series' => 'Hãy chọn đúng loại liên kết!',
        'confirm_delete' => 'Bạn có chắc chắn muốn xóa ',
    ],
    'series' => [
        'update_success' => 'Bài tổng hợp đã được lưu.',
        'empty_title' => 'Tiêu đề không được trống.',
        'empty_url' => 'Đường dẫn không được trống.',
        'not_url' => 'URL không hợp lệ',
        'save_success' => 'Bài tổng hợp đã lưu thành công.',
        'empty_list' => 'Danh sách bài tổng hợp không được để trống',
        'empty_input' => 'Một vài mục đang để trống.',
        'incorrect_link' => 'Đường dẫn không hợp lệ.',
        'not_finish_load_preview' => 'Hãy đợi tải xong bản xem trước',
        'language_post' => 'Bạn muốn viết bài bằng ngôn ngữ nào?',
    ],
    'client' => [
        'not_delete' => 'Không thể xóa, vui lòng thử lại.',
        'not_save' => 'Không thể lưu, vui lòng thử lại.',
        'empty_input' => 'Cần điền tất cả các mục.',
        'not_redirect_uri' => 'Sai đường dẫn.',
        'saved' => 'Client đã được tạo.',
        'title_confirm' => 'Bạn có chắc?',
        'message_warning' => 'Bạn có muốn xóa ứng dụng này?',
        'delete_fail' => 'Không thể xóa ứng dụng này.',
        'delete_success' => 'Đã xóa ứng dụng này.',
    ],
    'work_email' => [
        'confirm_work_email' => 'Xác minh hòm thư công việc',
        'not_active' => 'Không thể kích hoạt hòm thư công việc của bạn.',
        'actived' => 'Hòm thư công việc của bạn đã được kích hoạt.',
    ],
    'maintenance' => [
        'down' => 'Xin lỗi, chúng tôi đang tạm thời đóng cửa để bảo trì.',
        'back' => 'Việc bảo trì sẽ được hoàn thành sớm.',
    ],
    'contest' => [
        'show_title' => 'bảng xếp hạng cuộc thi',
        'score' => 'ghi bàn',
        'articles' => 'bài viết',
        'no_ranks' => 'Không có xếp hạng để hiển thị',
        'add_more' => 'Bổ sung thêm',
        'email_warning' => 'Có miền email không còn lại nhiều hơn',
        'none' => 'None',
        'create_title' => 'tạo cuộc thi',
        'enter_name' => 'tên cuộc thi',
        'enter_tags' => 'thẻ',
        'enter_categories' => 'nhập các loại',
        'create_success' => 'Cuộc thi tạo thành công.',
        'manage_title' => 'quản lý thi',
        'no_contest' => 'Cuộc thi không được tìm thấy.',
    ],
    'reset_password' => [
        'sent' => 'Mật khẩu của bạn đã được cài đặt lại thành công!',
        'mail_subject' => 'Tin nhắn để cài đặt lại mật khẩu của bạn',
        'mail_content' => 'Nhấn vào đây để đặt lại mật khẩu của bạn',
        'title_page' => 'Đặt lại mật khẩu',
        'sent_remind' => 'Chúng tôi đã gửi mail để cài đặt lại mật khẩu!',
    ]
];

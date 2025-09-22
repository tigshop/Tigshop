
export interface accountManageParams {
    adminId: number;
    username?: string;
    mobile?: string;
}

export interface accountManageFilterParams {
    page?: number;
    size?: number;
    sortField?: string;
    keyword?: string;
    sortOrder?: string;
    type: string;
    adminId: number;
}

export interface accountManageResult {
    records: accountManageListParams[];
    total: number;
}

export interface accountManageListParams {
    id: number;
    name: string;
    logo: string;
    merchantName: string;
    status: number;
    adminUsername: string;
    addTime: string;
    type: number;
}

export interface mainAccountParams {
    adminData?: AdminInfo;
    id?: number;
    type: string;
    [property: string]: any;
}
export interface AdminInfo {
    adminId?: number;
    type?: number;
    userId?: number;
    [property: string]: any;
}


export interface pageAdminUserFilterParams {
    page?: number;
    size?: number;
    sortField?: string;
    keyword?: string;
    sortOrder?: string;
}

/**
 * PageAdminUserAccountListVO
 */
export interface pageAdminUserResponse {
    countId?: string;
    current?: number;
    maxLimit?: number;
    optimizeCountSql?: Response;
    optimizeJoinOfCountSql?: boolean;
    orders?: OrderItem[];
    pages: number;
    records: AdminUserAccountListVO[];
    searchCount?: Response;
    size: number;
    total: number;
    [property: string]: any;
}

/**
 * OrderItem
 */
export interface OrderItem {
    asc?: boolean;
    column?: string;
    [property: string]: any;
}

/**
 * AdminUserAccountListVO，账号管理分页列表
 */
export interface AdminUserAccountListVO {
    /**
     * 创建时间
     */
    addTime?: string;
    /**
     * adminId
     */
    adminId?: number;
    /**
     * 头像
     */
    avatar?: string;
    /**
     * 邮箱
     */
    email?: string;
    /**
     * 手机
     */
    shopCount?: number;
    /**
     * 账号名称
     */
    username?: string;
    /**
     * 关联供应商
     */
    vendorCount?: number;
    [property: string]: any;
}
